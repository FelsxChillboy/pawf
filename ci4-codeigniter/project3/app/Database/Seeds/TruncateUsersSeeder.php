<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TruncateUsersSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // Matikan foreign key check
        $db->query('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel relasi dulu
        $db->table('auth_groups_users')->truncate();

        // Baru truncate users
        $db->table('users')->truncate();

        // Nyalakan lagi
        $db->query('SET FOREIGN_KEY_CHECKS=1;');
    }
}