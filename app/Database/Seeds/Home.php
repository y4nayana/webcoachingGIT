<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Home extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Agents',
                'image' => 'Agents.png',
                'deskripsi' => 'More than guns and bullets',
            ],
            [
                'nama' => 'Maps',
                'image' => 'Maps.png',
                'deskripsi' => 'Fight around the world',
            ],
            [
                'nama' => 'Bronze',
                'image' => 'Bronze.webp',
                'deskripsi' => '2 Coaching Session',
            ],
            [
                'nama' => 'Silver',
                'image' => 'Silver.webp',
                'deskripsi' => '4 Coaching Session  + 1 Free Coaching Session',
            ],
            [
                'nama' => 'Gold',
                'image' => 'Gold.webp',
                'deskripsi' => '6 Coaching Session  + 2 Free Coaching Session',
            ],

        ];

        $db = \Config\Database::connect();
        $builder = $db->table('home');

        foreach ($data as $home) {
            // Check if the home already exists
            $existinghome = $builder->getWhere(['image' => $home['image']])->getRow();

            if ($existinghome) {
                // home already exists, update minihome and deskripsi if they are set
                $updateData = [];
                if (isset($home['image'])) {
                    $updateData['image'] = $home['image'];
                }
                if (isset($home['deskripsi'])) {
                    $updateData['deskripsi'] = $home['deskripsi'];
                }
                if (!empty($updateData)) {
                    $builder->set($updateData);
                    $builder->where('image', $home['image']);
                    $builder->update();
                }
            } else {
                // Insert the home if it does not exist
                $builder->insert($home);
            }
        }
    }
}
