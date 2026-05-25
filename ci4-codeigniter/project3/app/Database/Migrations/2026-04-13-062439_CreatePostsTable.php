<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        //Membuat kolom/field untuk tabel posts
        $this->forge->addField([
        'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
        ],
        'title' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
        ],
        'author' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'default' => 'azar',
        ],
        'content' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'status' => [
            'type' => 'ENUM',
            'constraint' => ['draft', 'published', 'archived'],
            'default' => 'draft',
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'default' => new \CodeIgniter\Database\RawSql('CURRENT_TIMESTAMP'),
        ],
        ]);
        //Membuat primary key
        $this->forge->addKey('id', true);

        //Membuat tabel posts
        $this->forge->createTable('posts', true);
    }

    public function down()
    {
        //Menghapus tabel posts
        $this->forge->dropTable('posts', true);
    }
}
