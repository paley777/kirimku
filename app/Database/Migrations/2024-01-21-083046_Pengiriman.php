<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengiriman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'destinasi_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'biaya_pengiriman' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'tanggal_sampai' => [
                'type' => 'DATE',
                'null' => true,
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', true);

        // Membuat tabel news
        $this->forge->createTable('pengiriman', true);
    }

    public function down()
    {
        $this->forge->dropTable('pengiriman');
    }
}
