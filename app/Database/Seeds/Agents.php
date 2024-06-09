<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Agents extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Brimstone',
                'icon' => 'Brimstone_icon.webp',
                'agentimage' => 'Brimstone.png'
            ],
            [
                'nama' => 'Phoenix',
                'icon' => 'Phoenix_icon.webp',
                'agentimage' => 'Phoenix.png'
            ],
        ];
        $this->db->table('agents')->insertBatch($data);
    }
}
