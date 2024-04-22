<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Destinasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'destinasi_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
                'auto_increment' => true,
            ],
            'destinasi_name' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => '150',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('destinasi_id', true);

        // Membuat tabel news
        $this->forge->createTable('destinasi', true);
    }

    public function down()
    {
        $this->forge->dropTable('destinasi');
    }
}
