<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Cara Membuat Website dengan CodeIgniter 4',
                'slug' => 'cara-membuat-website-dengan-codeigniter-4',
                'content' => 'CodeIgniter adalah framework PHP yang powerful dan mudah digunakan. Dalam artikel ini, kita akan belajar cara membuat website yang lengkap dengan CodeIgniter 4. CodeIgniter menyediakan berbagai fitur seperti routing, database migration, dan banyak lagi yang memudahkan development. Anda bisa mulai dengan menginstal CodeIgniter, kemudian membuat controller, model, dan view untuk aplikasi Anda.',
                'author' => 'Ahmad Azaruddin',
                'status' => 'published',
                'category_id' => 1,
            ],
            [
                'title' => 'Best Practices dalam Web Development',
                'slug' => 'best-practices-dalam-web-development',
                'content' => 'Web development memerlukan best practices agar menghasilkan kode yang clean, maintainable, dan efficient. Beberapa best practices yang penting adalah menggunakan version control (Git), write clean code, implement testing, dan follow coding standards. Selain itu, security juga sangat penting dalam web development. Anda harus memahami OWASP Top 10 dan cara mitigasinya.',
                'author' => 'Ahmad Azaruddin',
                'status' => 'published',
                'category_id' => 2,
            ],
            [
                'title' => 'Optimisasi Database Query',
                'slug' => 'optimisasi-database-query',
                'content' => 'Database query yang tidak optimal dapat mengurangi performance aplikasi secara signifikan. Ada beberapa teknik yang bisa digunakan untuk optimisasi query, seperti menggunakan index, menghindari N+1 query problem, dan menggunakan query builder dengan efficient. Selain itu, anda juga bisa menggunakan caching untuk mengurangi beban database.',
                'author' => 'Ahmad Azaruddin',
                'status' => 'published',
                'category_id' => 3,
            ],
            [
                'title' => 'Prinsip-Prinsip UI/UX Design',
                'slug' => 'prinsip-prinsip-ui-ux-design',
                'content' => 'UI/UX Design adalah aspek penting dalam membuat aplikasi atau website yang user-friendly. Beberapa prinsip yang harus diperhatikan adalah consistency, accessibility, simplicity, dan responsiveness. Design yang baik akan meningkatkan user satisfaction dan conversion rate. Anda harus memahami user psychology dan menggunakan tools seperti Figma untuk design mockup.',
                'author' => 'Ahmad Azaruddin',
                'status' => 'published',
                'category_id' => 4,
            ],
            [
                'title' => 'RESTful API Design dengan CodeIgniter',
                'slug' => 'restful-api-design-dengan-codeigniter',
                'content' => 'RESTful API adalah arsitektur yang standar untuk membuat API yang scalable dan maintainable. Dalam CodeIgniter 4, anda bisa dengan mudah membuat RESTful API dengan resource controller. API yang baik harus memiliki proper HTTP status code, error handling yang baik, dan dokumentasi yang lengkap. Anda juga harus implement authentication dan authorization untuk melindungi API Anda.',
                'author' => 'Ahmad Azaruddin',
                'status' => 'published',
                'category_id' => 2,
            ],
            [
                'title' => 'Keamanan Web Application',
                'slug' => 'keamanan-web-application',
                'content' => 'Keamanan adalah prioritas utama dalam web development. Anda harus melindungi aplikasi dari berbagai attack seperti SQL Injection, XSS, CSRF, dan lainnya. CodeIgniter menyediakan built-in protection untuk beberapa tipe attack. Selain itu, anda juga perlu implement HTTPS, strong password hashing, dan proper session management untuk menjaga keamanan aplikasi Anda.',
                'author' => 'Ahmad Azaruddin',
                'status' => 'published',
                'category_id' => 1,
            ],
        ];

        // Using Query Builder
        $this->db->table('posts')->insertBatch($data);
    }
}

