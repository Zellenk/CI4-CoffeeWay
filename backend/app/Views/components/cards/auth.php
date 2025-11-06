<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $request = service('request');


        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();


        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email = $post['email'];


        $userModel = new UserModel();

        $user = $userModel->where('email', $email)->first();

        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }


        $userArr = $user->toArray();

        if (! password_verify($post['password'], $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }


        $session->set('user', [
            'id'            => $userArr['id'],
            'email'         => $userArr['email'],
            'first_name'    => $userArr['first_name'],
            'last_name'     => $userArr['last_name'],
            'type'          => $userArr['type'],
            'display_name'  => trim(
                ($userArr['first_name'][0] ?? '') . ' ' .
                    ($userArr['middle_name'][0] ?? '') . ' ' .
                    ($userArr['last_name'] ?? '')
            ),
        ]);

        $type = strtolower($userArr['type']);

        if ($type === 'manager') {
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->to('/');
    }

    public function logout()
    {

        session()->destroy();

        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 3600,
            $params['path'] ?? '/',
            $params['domain'] ?? '',
            isset($_SERVER['HTTPS']),
            true
        );

        return redirect()->to('/');
    }

    public function signup()
    {
        $request = service('request');
        $session = session();

        if ($request->getMethod() === 'post') {

            $post = $this->request->getPost();

            $rules = [
                'first_name' => 'required|min_length[2]',
                'last_name' => 'required|min_length[2]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[4]',
                'confirm_password' => 'matches[password]',
            ];

            $messages = [
                'email' => [
                    'is_unique' => 'Email is already registered!'
                ],
                'confirm_password' => [
                    'matches' => 'Passwords do not match!',
                ]
            ];

            if (!$this->validate($rules, $messages)) {
                return redirect()
                    ->back()
                    ->with('errors', $this->validator->getErrors())
                    ->withInput();
            }
            $data = [
                'first_name'       => $post['first_name'],
                'middle_name'      => $post['middle_name'] ?? null,
                'last_name'        => $post['last_name'],
                'display_name'     => $post['first_name'] . ' ' . $post['last_name'],
                'email'            => $post['email'],
                'contact_no'       => $post['contact_no'] ?? null,
                'password_hash'    => password_hash($post['password'], PASSWORD_DEFAULT),
                'type'             => 'client',
                'account_status'   => 1,
                'email_activated'  => 0
            ];

            $userModel = new UserModel();
            $inserted = $userModel->insert($data);

            if ($inserted) {
                $session->setFlashdata('success', 'Account Created Successfully! You may now login.');
                return redirect()->to('/login');
            } else {
                $session->setFlashdata('error', 'Registration Failed! Try again.');
                return redirect()->back();
            }
        }

        return view('signup');
    }
}
