<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agents extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
                'unsigned'       => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'icon' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'agentimage' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'deskripsi'    =>[
                'type' =>'text',
                'null' =>true
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
                // Membuat primary key
            $this->forge->addKey('id', TRUE);

                // Membuat tabel comments
            $this->forge->createTable('agents', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('agents');
    }
}