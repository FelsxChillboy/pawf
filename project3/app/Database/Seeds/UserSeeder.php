<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@myblog.com',
                'password' => password_hash('password123', PASSWORD_BCRYPT),
                'is_verified' => true,
            ],
            [
                'username' => 'john',
                'email' => 'john@example.com',
                'password' => password_hash('password123', PASSWORD_BCRYPT),
                'is_verified' => true,
            ],
            [
                'username' => 'sarah',
                'email' => 'sarah@example.com',
                'password' => password_hash('password123', PASSWORD_BCRYPT),
                'is_verified' => true,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
