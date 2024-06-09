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
                'minimap' => 'Bind_minimap.webp',
                'deskripsi' => 'Two sites. No middle. Gotta pick left or right. What’s it going to be then? Both offer direct paths for attackers and a pair of one-way teleporters make it easier to flank.',
            ],
            [
                'nama' => 'Haven',
                'map' => 'Haven.webp',
                'minimap' => 'Haven_minimap.webp',
                'deskripsi' => 'Beneath a forgotten monastery, a clamour emerges from rival Agents clashing to control three sites. There is more territory to control, but defenders can use the extra real estate for aggressive pushes.',
            ],
            [
                'nama' => 'Split',
                'map' => 'Split.webp',
                'minimap' => 'Split_minimap.webp',
                'deskripsi' => 'If you want to go far, you will have to go up. A pair of sites split by an elevated center allows for rapid movement using two rope ascenders. Each site is built with a looming tower vital for control. Remember to watch above before it all blows sky-high.',
            ],
            [
                'nama' => 'Ascent',
                'map' => 'Ascent.webp',
                'minimap' => 'Ascent_minimap.webp',
                'deskripsi' => 'An open playground for small wars of position and attrition divide two sites on Ascent. Each site can be fortified by irreversible bomb doors; once they’re down, you will have to destroy them or find another way. Yield as little territory as possible.',
            ],
            [
                'nama' => 'Icebox',
                'map' => 'Icebox.webp',
                'minimap' => 'Icebox_minimap.webp',
                'deskripsi' => 'Your next battleground is a secret Kingdom excavation site overtaken by the arctic. The two plant sites protected by snow and metal require some horizontal finesse. Take advantage of the ziplines and they will never see you coming.',
            ],
            [
                'nama' => 'Breeze',
                'map' => 'Breeze.webp',
                'minimap' => 'Breeze_minimap.webp',
                'deskripsi' => 'Take in the sights of historic ruins or seaside caves on this tropical paradise. But bring some cover. You will need them for the wide open spaces and long range engagements. Watch your flanks and this will be a Breeze.',
            ],
            [
                'nama' => 'Fracture',
                'map' => 'Fracture.webp',
                'minimap' => 'Fracture_minimap.webp',
                'deskripsi' => 'A top secret research facility split apart by a failed radianite experiment. With defender options as divided as the map, the choice is yours: meet the attackers on their own turf or batten down the hatches to weather the assault.',
            ],
            [
                'nama' => 'Pearl',
                'map' => 'Pearl.webp',
                'minimap' => 'Pearl_minimap.webp',
                'deskripsi' => 'Attackers push down into the Defenders on this two-site map set in a vibrant, underwater city. Pearl is a geo-driven map with no mechanics. Take the fight through a compact mid or the longer range wings in our first map set in Omega Earth.',
            ],
            [
                'nama' => 'Lotus',
                'map' => 'Lotus.webp',
                'minimap' => 'Lotus_minimap.webp',
                'deskripsi' => 'A mysterious structure housing an astral conduit radiates with ancient power. Great stone doors provide a variety of movement opportunities and unlock the paths to three mysterious sites.',
            ],
            [
                'nama' => 'Sunset',
                'map' => 'Sunset.webp',
                'minimap' => 'Sunset_minimap.webp',
                'deskripsi' => 'A disaster at a local kingdom facility threatens to engulf the whole neighborhood. Stop at your favorite food truck then fight across the city in this traditional three lane map.',
            ],
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('maps');

        foreach ($data as $map) {
            // Check if the map already exists
            $existingMap = $builder->getWhere(['nama' => $map['nama']])->getRow();

            if ($existingMap) {
                // Map already exists, update minimap and deskripsi if they are set
                $updateData = [];
                if (isset($map['minimap'])) {
                    $updateData['minimap'] = $map['minimap'];
                }
                if (isset($map['deskripsi'])) {
                    $updateData['deskripsi'] = $map['deskripsi'];
                }
                if (!empty($updateData)) {
                    $builder->set($updateData);
                    $builder->where('nama', $map['nama']);
                    $builder->update();
                }
            } else {
                // Insert the map if it does not exist
                $builder->insert($map);
            }
        }
    }
}
