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
            [
                'nama' => 'Sage',
                'icon' => 'Sage_icon.webp',
                'agentimage' => 'Sage.png'
            ],
            [
                'nama' => 'Sova',
                'icon' => 'Sova_icon.webp',
                'agentimage' => 'Sova.png'
            ],
            [
                'nama' => 'Viper',
                'icon' => 'Viper_icon.webp',
                'agentimage' => 'Viper.png'
            ],
            [
                'nama' => 'Cypher',
                'icon' => 'Cypher_icon.webp',
                'agentimage' => 'Cypher.png'
            ],
            [
                'nama' => 'Reyna',
                'icon' => 'Reyna_icon.webp',
                'agentimage' => 'Reyna.png'
            ],
            [
                'nama' => 'Killjoy',
                'icon' => 'Killjoy_icon.webp',
                'agentimage' => 'Killjoy.png'
            ],
            [
                'nama' => 'Breach',
                'icon' => 'Breach_icon.webp',
                'agentimage' => 'Breach.png'
            ],
            [
                'nama' => 'Omen',
                'icon' => 'Omen_icon.webp',
                'agentimage' => 'Omen.png'
            ],
            [
                'nama' => 'Jett',
                'icon' => 'Jett_icon.webp',
                'agentimage' => 'Jett.png'
            ],
            [
                'nama' => 'Raze',
                'icon' => 'Raze_icon.webp',
                'agentimage' => 'Raze.png'
            ],
            [
                'nama' => 'Skye',
                'icon' => 'Skye_icon.webp',
                'agentimage' => 'Skye.png'
            ],
            [
                'nama' => 'Yoru',
                'icon' => 'Yoru_icon.webp',
                'agentimage' => 'Yoru.png'
            ],
            [
                'nama' => 'Astra',
                'icon' => 'Astra_icon.webp',
                'agentimage' => 'Astra.png'
            ],
            [
                'nama' => 'KAY/O',
                'icon' => 'KAYO_icon.webp',
                'agentimage' => 'Kay_o.png'
            ],
            [
                'nama' => 'Chamber',
                'icon' => 'Chamber_icon.webp',
                'agentimage' => 'Chamber.png'
            ],
            [
                'nama' => 'Neon',
                'icon' => 'Neon_icon.webp',
                'agentimage' => 'Neon.png'
            ],
            [
                'nama' => 'Fade',
                'icon' => 'Fade_icon.webp',
                'agentimage' => 'Fade.png'
            ],
            [
                'nama' => 'Harbor',
                'icon' => 'Harbor_icon.webp',
                'agentimage' => 'Harbor.png'
            ],
            [
                'nama' => 'Gekko',
                'icon' => 'Gekko_icon.webp',
                'agentimage' => 'Gekko.png'
            ],
            [
                'nama' => 'Deadlock',
                'icon' => 'Deadlock_icon.webp',
                'agentimage' => 'Deadlock.png'
            ],
            [
                'nama' => 'Iso',
                'icon' => 'Iso_icon.webp',
                'agentimage' => 'Iso.png'
            ],
            [
                'nama' => 'Clove',
                'icon' => 'Clove_icon.webp',
                'agentimage' => 'Clove.png'
            ],
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('agents');

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

        //     array("Brimstone", "uploads/icons/Brimstone_icon.webp", "uploads/images/Brimstone.png"),
        //     array("Phoenix", "uploads/icons/Phoenix_icon.webp", "uploads/images/Phoenix.png"),
        //     array("Sage", "uploads/icons/Sage_icon.webp", "uploads/images/Sage.png"),
        //     array("Sova", "uploads/icons/Sova_icon.webp", "uploads/images/Sova.png"),
        //     array("Viper", "uploads/icons/Viper_icon.webp", "uploads/images/Viper.png"),
        //     array("Cypher", "uploads/icons/Cypher_icon.webp", "uploads/images/Cypher.png"),
        //     array("Reyna", "uploads/icons/Reyna_icon.webp", "uploads/images/Reyna.png"),
        //     array("Killjoy", "uploads/icons/Killjoy_icon.webp", "uploads/images/Killjoy.png"),
        //     array("Breach", "uploads/icons/Breach_icon.webp", "uploads/images/Breach.png"),
        //     array("Omen", "uploads/icons/Omen_icon.webp", "uploads/images/Omen.png"),
        //     array("Jett", "uploads/icons/Jett_icon.webp", "uploads/images/Jett.png"),
        //     array("Raze", "uploads/icons/Raze_icon.webp", "uploads/images/Raze.png"),
        //     array("Skye", "uploads/icons/Skye_icon.webp", "uploads/images/Skye.png"),
        //     array("Yoru", "uploads/icons/Yoru_icon.webp", "uploads/images/Yoru.png"),
        //     array("Astra", "uploads/icons/Astra_icon.webp", "uploads/images/Astra.png"),
        //     array("Kay/O", "uploads/icons/KAYO_icon.webp", "uploads/images/Kay_o.png"),
        //     array("Chamber", "uploads/icons/Chamber_icon.webp", "uploads/images/Chamber.png"),
        //     array("Neon", "uploads/icons/Neon_icon.webp", "uploads/images/Neon.png"),
        //     array("Fade", "uploads/icons/Fade_icon.webp", "uploads/images/Fade.png"),
        //     array("Harbor", "uploads/icons/Harbor_icon.webp", "uploads/images/Harbor.png"),
        //     array("Gekko", "uploads/icons/Gekko_icon.webp", "uploads/images/Gekko.png"),
        //     array("Deadlock", "uploads/icons/Deadlock_icon.webp", "uploads/images/Deadlock.png"),
        //     array("Iso", "uploads/icons/Iso_icon.webp", "uploads/images/Iso.png"),
        //     array("Clove", "uploads/icons/Clove_icon.webp", "uploads/images/Clove.png"),
