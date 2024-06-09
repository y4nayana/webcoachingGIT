<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Maps extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Bind',
                'map' => 'Bind.webp',
            ],
            [
                'nama' => 'Haven',
                'map' => 'Haven.webp',
            ],
            [
                'nama' => 'Split',
                'map' => 'Split.webp',
            ],
            [
                'nama' => 'Ascent',
                'map' => 'Ascent.webp',
            ],
            [
                'nama' => 'Icebox',
                'map' => 'Icebox.webp',
            ],
            [
                'nama' => 'Breeze',
                'map' => 'Breeze.webp',
            ],
            [
                'nama' => 'Fracture',
                'map' => 'Fracture.webp',
            ],
            [
                'nama' => 'Pearl',
                'map' => 'Pearl.webp',
            ],
            [
                'nama' => 'Lotus',
                'map' => 'Lotus.webp',
            ],
            [
                'nama' => 'Sunset',
                'map' => 'Sunset.webp',
            ],
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('maps');

        foreach ($data as $agent) {
            // Check if the agent already exists
            $existingAgent = $builder->getWhere(['nama' => $agent['nama']])->getResult();

            if (empty($existingAgent)) {
                // Insert the agent if it does not exist
                $builder->insert($agent);
            }
        }
    }
}
