<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('123', PASSWORD_DEFAULT);

        $dataYouWannaInsert = [
            [
                'first_name'      => 'Ashley',
                'middle_name'     => 'M',
                'last_name'       => 'Solis',
                'email'           => 'Ash@example.com',
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
                'first_name'      => 'Coffee',
                'middle_name'     => 'Na',
                'last_name'       => 'Malupit',
                'email'           => 'Coffee@coffeeway.com',
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
