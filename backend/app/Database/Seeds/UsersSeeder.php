<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('123', PASSWORD_DEFAULT);
        $tableName = 'users'; // Define table name once

        $dataToInsert = [
            [
                'first_name'      => 'Ashley',
                'middle_name'     => 'M',
                'last_name'       => 'Solis',
                'email'           => 'AshleySolis@example.com',
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
                'first_name'      => 'Aiel',
                'middle_name'     => 'W',
                'last_name'       => 'Ramos',
                'email'           => 'Ayee123@example.com',
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
                'middle_name'     => 'Na',
                'last_name'       => 'Malupet',
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

        // 1. Get a list of emails to check
        $emailsToCheck = array_column($dataToInsert, 'email');

        // 2. Query the database for existing emails
        $existingUsers = $this->db->table($tableName)
            ->select('email')
            ->whereIn('email', $emailsToCheck)
            ->get()
            ->getResultArray();

        // 3. Create an array of existing emails for quick lookup
        $existingEmails = array_column($existingUsers, 'email');

        // 4. Filter the data to insert only non-existing users
        $filteredData = array_filter($dataToInsert, function ($user) use ($existingEmails) {
            return !in_array($user['email'], $existingEmails);
        });

        // 5. Insert the batch only if there is data to insert
        if (!empty($filteredData)) {
            $this->db->table($tableName)->insertBatch($filteredData);
            echo "Successfully seeded " . count($filteredData) . " new user(s).\n";
        } else {
            echo "All users in seeder already exist. No new users seeded.\n";
        }
    }
}
