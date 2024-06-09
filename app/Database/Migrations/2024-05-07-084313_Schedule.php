<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Schedule extends Migration
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
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'jam' => [
                'type'       => 'TIME',
                'null'       => false,
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null'       => false,
            ],
            'nama_coach' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'keterangan_coach' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
                // Membuat primary key
            $this->forge->addKey('id', TRUE);

                // Membuat tabel comments
            $this->forge->createTable('schedule', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('schedule');
    }
}
