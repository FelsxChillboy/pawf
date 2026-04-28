<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Artikel tentang teknologi dan programming',
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Tutorial dan tips web development',
            ],
            [
                'name' => 'Database',
                'slug' => 'database',
                'description' => 'Artikel tentang database dan SQL',
            ],
            [
                'name' => 'Design',
                'slug' => 'design',
                'description' => 'UI/UX Design dan web design',
            ],
        ];

        // Using Query Builder
        $this->db->table('categories')->insertBatch($data);
    }
}
