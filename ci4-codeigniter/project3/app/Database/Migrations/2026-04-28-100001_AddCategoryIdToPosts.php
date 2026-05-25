<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategoryIdToPosts extends Migration
{
    public function up()
    {
        $this->forge->addColumn('posts', [
            'category_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'null' => true,
                'after' => 'slug'
            ],
        ]);

        // Tambahkan foreign key
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropForeignKey('posts', 'posts_category_id_foreign');
        $this->forge->dropColumn('posts', 'category_id');
    }
}
