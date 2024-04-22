<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
                'auto_increment' => true,
            ],
            'customer_name' => [
                'type' => 'VARCHAR',
                'null' => false,
                'constraint' => '150',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('customer_id', true);

        // Membuat tabel news
        $this->forge->createTable('customer', true);
    }

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
