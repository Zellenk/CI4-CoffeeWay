<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel; // <-- REQUIRED IMPORT

class Employee extends BaseController
{
    public function dashboard()
    {
        // You can load a view or echo something simple for now
        return view('employee/dashboard');
    }

    public function accounts()
    {
        // 1. Instantiate the UserModel
        $userModel = new UserModel();

        // 2. Fetch all users from the database using findAll()
        // The results will be an array of User Entities because of $returnType in UserModel
        $users = $userModel->findAll();

        // 3. Prepare the data array for the view
        $data = [
            'users' => $users
        ];

        // 4. Load the accounts view, passing the user data
        return view('employee/accounts', $data);
    }

    public function inquiries()
    {
        // You can load a view or echo something simple for now
        return view('employee/inquiries');
    }

    public function services()
    {
        // You can load a view or echo something simple for now
        return view('employee/dashboard');
    }
}
