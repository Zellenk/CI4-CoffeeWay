<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function showLoginPage()
    {
        // Initialize session
        $session = session();

        // If already logged in, send to landing
        if ($session->has('user')) {
            return redirect()->to('/');
        }

        // Pull flashdata errors/old/success if present
        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];
        // Pull success message for a successful sign up
        $success = $session->getFlashdata('success') ?? null;


        return view('auth/login', ['errors' => $errors, 'old' => $old, 'success' => $success]);
    }

    public function login()
    {
        // Access service request
        $request = service('request');
        // Initialize Session
        $session = session();

        // Basic validation using CI's Validation service
        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        // Assign value from post to variable
        $post = $request->getPost();

        // If no value found from post, notify it is required
        if (! $validation->run($post)) {
            // Save errors and old input in flashdata and redirect back (PRG)
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            // Return back to the page with errors indicated
            return redirect()->back()->withInput();
        }

        // Assign value of email from post to variable
        $email = $request->getPost('email');

        // Authenticate against users table
        $userModel = new UserModel();
        // Using Query Builder, query the email from post and look for first value
        $user = $userModel->where('email', $email)->first();

        // If no user found, notify about the email
        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Using Query Builder, query the email from post and look if active
        // NOTE: $user is already retrieved above. We can check status on the object.
        if (is_array($user) ? $user['account_status'] != 1 : $user->account_status != 1) {
            $session->setFlashdata('errors', ['email' => 'Account has been deactivated']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Ensure email is activated (0 means not activated, 1 means activated)
        if (is_array($user) ? $user['email_activated'] != 1 : $user->email_activated != 1) {
            $session->setFlashdata('errors', ['email' => 'Account not activated. Please check your email.']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }


        // Normalize to array in case model returns an Entity object
        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        // If password doesn't match, notify specifically about password
        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Set session (minimal safe payload)
        $session->set('user', [
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'first_name' => $userArr['first_name'] ?? null,
            'last_name' => $userArr['last_name'] ?? null,
            'type' => $userArr['type'] ?? 'client',
            // Create a display name (better to create this in the User Entity if possible)
            'display_name' => trim(($userArr['first_name'] ?? '') . ' ' . ($userArr['last_name'] ?? '')),
        ]);

        // If the user checked "remember", extend the session cookie lifetime
        $remember = (bool) $request->getPost('remember');
        if ($remember) {
            // 30 days in seconds
            $lifetime = 30 * 24 * 60 * 60;
            // Try to extend server-side GC lifetime for this request
            @ini_set('session.gc_maxlifetime', (string) $lifetime);

            // Update the session cookie on the client to persist
            $params = session_get_cookie_params();
            setcookie(session_name(), session_id(), time() + $lifetime, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        } else {
            // Ensure cookie is a browser-session cookie (no expiry)
            $params = session_get_cookie_params();
            setcookie(session_name(), session_id(), 0, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        }

        // Redirect based on role
        $type = strtolower($userArr['type'] ?? 'client');

        // Admin account → employee dashboard
        if ($type === 'admin' || $type === 'manager' || $type === 'employee') {
            return redirect()->to('/employee/dashboard');
        }

        // Regular client → homepage
        return redirect()->to('/');
    }

    public function logout()
    {
        // Destroy server session
        session()->destroy();

        // Remove session cookie from client
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);

        return redirect()->to('/');
    }

    public function debugCheck()
    {
        $db = \Config\Database::connect();
        try {
            $ok = $db->query('SELECT 1')->getRow();
            return $this->response->setStatusCode(200)->setBody('debug: OK');
        } catch (\Throwable $e) {
            return $this->response->setStatusCode(500)->setBody('debug: DB error');
        }
    }

    public function showSignupPage()
    {
        // Initialize session
        $session = session();

        // If already logged in, send to landing
        if ($session->has('user')) {
            return redirect()->to('/');
        }

        // Pull flashdata errors/old if present
        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];
        // Pull success flashdata (if redirecting from login page)
        $success = $session->getFlashdata('success') ?? null;


        return view('auth/signup', ['errors' => $errors, 'old' => $old, 'success' => $success]);
    }

    public function signup()
    {
        // Access service request
        $request = service('request');
        // Initialize Session
        $session = session();

        // Basic validation using CI's Validation service
        $validation = \Config\Services::validation();
        $validation->setRule('first_name', 'First name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('middle_name', 'Middle name', 'permit_empty|max_length[100]');
        $validation->setRule('last_name', 'Last name', 'required|min_length[2]|max_length[100]');
        // ADDED VALIDATION RULE FOR contact_no
        $validation->setRule('contact_no', 'Contact Number', 'permit_empty|max_length[20]');
        $validation->setRule('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $validation->setRule('password', 'Password', 'required|min_length[6]');
        $validation->setRule('password_confirm', 'Password Confirmation', 'required|matches[password]');

        // Assign value from post to variable
        $post = $request->getPost();

        // If validation fails
        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Persist user to database using UsersModel
        $userModel = new UserModel();

        // Prepare data
        // NOTE: Using 'password' key to allow a potential Model hook to handle hashing.
        // If not using a hook, 'password_hash' is used below.
        $data = [
            'first_name' => $post['first_name'],
            'middle_name' => $post['middle_name'] ?? null,
            'last_name' => $post['last_name'],
            'contact_no' => $post['contact_no'] ?? null, // Added
            'email' => $post['email'],
            // Hashing the password explicitly if no Model hook is defined
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 1, // Setting to 1 to bypass activation step for now
            'newsletter' => 1,
        ];

        // Using Query Builder insert the data and check the return value
        $inserted = $userModel->insert($data);

        // If false means issue could happen in database
        if ($inserted === false) {
            $session->setFlashdata('errors', $userModel->errors() ?: ['general' => 'Could not create account']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Account created — redirect user to login page (no auto-login)
        $session->setFlashdata('success', 'Account created successfully! Please sign in.');
        return redirect()->to('/login');
    }
}
