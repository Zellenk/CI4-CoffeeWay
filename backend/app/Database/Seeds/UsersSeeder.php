<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $dataYouWannaInsert = [
            [
                'first_name'      => 'John',
                'middle_name'     => 'D',
                'last_name'       => 'Doe',
                'email'           => 'john.doe@example.com',
                'password_hash'   => $password,
                'type'            => 'client',
                'account_status'  => 1,
                'email_activated' => 0,
                'newsletter'      => 1,
                'profile_image'   => null,
                'created_at'      => $now,
                'updated_at'      => $now,
            ],
            [
                'first_name'      => 'Admin',
                'middle_name'     => '',
                'last_name'       => 'Coffee',
                'email'           => 'admin@coffeeway.com',
                'password_hash'   => $password,
                'type'            => 'admin',
                'account_status'  => 1,
                'email_activated' => 1,
                'newsletter'      => 0,
                'profile_image'   => null,
                'created_at'      => $now,
                'updated_at'      => $now,
            ]
        ];

        $this->db->table('users')->insertBatch($dataYouWannaInsert);
    }
}
