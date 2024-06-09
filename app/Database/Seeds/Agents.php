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
                'agentimage' => 'Brimstone.png',
                'deskripsi' => 'Joining from the U.S.A., Brimstone orbital arsenal ensures his squad always has the advantage. His ability to deliver utility precisely and safely make him the unmatched boots-on-the-ground commander.'
            ],
            [
                'nama' => 'Phoenix',
                'icon' => 'Phoenix_icon.webp',
                'agentimage' => 'Phoenix.png',
                'deskripsi' => 'Hailing from the U.K., Phoenix star power shines through in his fighting style, igniting the battlefield with flash and flare. Whether he is got backup or not, he will rush into a fight on his own terms.'
            ],
            [
                'nama' => 'Sage',
                'icon' => 'Sage_icon.webp',
                'agentimage' => 'Sage.png',
                'deskripsi' => 'The bastion of China, Sage creates safety for herself and her team wherever she goes. Able to revive fallen friends and stave off aggressive pushes, she provides a calm center to a hellish fight.'
            ],
            [
                'nama' => 'Sova',
                'icon' => 'Sova_icon.webp',
                'agentimage' => 'Sova.png',
                'deskripsi' => 'Born from the eternal winter of Russian tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision. His custom bow and incredible scouting abilities ensure that even if you run, you cannot hide.'
            ],
            [
                'nama' => 'Viper',
                'icon' => 'Viper_icon.webp',
                'agentimage' => 'Viper.png',
                'deskripsi' => 'The American chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and choke the enemies vision. If the toxins dont kill her prey, her mind games surely will.'

            ],
            [
                'nama' => 'Cypher',
                'icon' => 'Cypher_icon.webp',
                'agentimage' => 'Cypher.png',
                'deskripsi' => 'The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemies every move. No secret is safe. No maneuver goes unseen. Cypher is always watching.'
            ],
            [
                'nama' => 'Reyna',
                'icon' => 'Reyna_icon.webp',
                'agentimage' => 'Reyna.png',
                'deskripsi' => 'Forged in the heart of Mexico, Reyna dominates single combat, popping off with each kill she scores. Her capability is only limited by her raw skill, making her highly dependent on performance.'
            ],
            [
                'nama' => 'Killjoy',
                'icon' => 'Killjoy_icon.webp',
                'agentimage' => 'Killjoy.png',
                'deskripsi' => 'The genius of Germany, Killjoy effortlessly secures key battlefield positions with her arsenal of inventions. If their damage doesnt take her enemies out, the debuff her robots provide will make short work of them.'
            ],
            [
                'nama' => 'Breach',
                'icon' => 'Breach_icon.webp',
                'agentimage' => 'Breach.png',
                'deskripsi' => 'Breach, the bionic Swede, fires powerful, targeted kinetic blasts to aggressively clear a path through enemy ground. The damage and disruption he inflicts ensures no fight is ever fair.'
            ],
            [
                'nama' => 'Omen',
                'icon' => 'Omen_icon.webp',
                'agentimage' => 'Omen.png',
                'deskripsi' => 'A phantom of a memory, Omen hunts in the shadows. He renders enemies blind, teleports across the field, then lets paranoia take hold as his foe scrambles to learn where he might strike next.'
            ],
            [
                'nama' => 'Jett',
                'icon' => 'Jett_icon.webp',
                'agentimage' => 'Jett.png',
                'deskripsi' => 'Representing her home country of South Korea, Jetts agile and evasive fighting style lets her take risks no one else can. She runs circles around every skirmish, cutting enemies before they even know what hit them.'
                
            ],
            [
                'nama' => 'Raze',
                'icon' => 'Raze_icon.webp',
                'agentimage' => 'Raze.png',
                'deskripsi' => 'Raze explodes out of Brazil with her big personality and big guns. With her blunt-force-trauma playstyle, she excels at flushing entrenched enemies and clearing tight spaces with a generous dose of “boom.”'
            ],
            [
                'nama' => 'Skye',
                'icon' => 'Skye_icon.webp',
                'agentimage' => 'Skye.png',
                'deskripsi' => 'Hailing from Australia, Skye and her band of beasts trail-blaze the way through hostile territory. With her creations hampering the enemy, and her power to heal others, the team is strongest and safest by Skyes side.'
            ],
            [
                'nama' => 'Yoru',
                'icon' => 'Yoru_icon.webp',
                'agentimage' => 'Yoru.png',
                'deskripsi' => 'Japanese native Yoru rips holes straight through reality to infiltrate enemy lines unseen. Using deception and aggression in equal measure, he gets the drop on each target before they know where to look.'
            ],
            [
                'nama' => 'Astra',
                'icon' => 'Astra_icon.webp',
                'agentimage' => 'Astra.png',
                'deskripsi' => 'Ghanaian Agent Astra harnesses the energies of the cosmos to reshape battlefields to her whim. With full command of her astral form and a talent for deep strategic foresight, she is always eons ahead of her enemies next move.'
            ],
            [
                'nama' => 'KAY/O',
                'icon' => 'KAYO_icon.webp',
                'agentimage' => 'Kay_o.png',
                'deskripsi' => 'KAY/O is a machine of war built for a single purpose: neutralizing radiants. His power to suppress enemy abilities dismantles his opponents capacity to fight back, securing him and his allies the ultimate edge.'
                
            ],
            [
                'nama' => 'Chamber',
                'icon' => 'Chamber_icon.webp',
                'agentimage' => 'Chamber.png',
                'deskripsi' => 'Well-dressed and well-armed, French weapons designer Chamber expels aggressors with deadly precision. He leverages his custom arsenal to hold the line and pick off enemies from afar, with a contingency built for every plan.'
            ],
            [
                'nama' => 'Neon',
                'icon' => 'Neon_icon.webp',
                'agentimage' => 'Neon.png',
                'deskripsi' => 'Filipino Agent, Neon, surges forward at shocking speeds, discharging bursts of bioelectric radiance as fast as her body generates it. She races ahead to catch enemies off guard, then strikes them down quicker than lightning.'
            ],
            [
                'nama' => 'Fade',
                'icon' => 'Fade_icon.webp',
                'agentimage' => 'Fade.png',
                'deskripsi' => 'Turkish bounty hunter Fade unleashes the power of raw nightmare to seize enemy secrets. Attuned with terror itself, she hunts down targets and reveals their deepest fears - before crushing them in the dark.'
            ],
            [
                'nama' => 'Harbor',
                'icon' => 'Harbor_icon.webp',
                'agentimage' => 'Harbor.png',
                'deskripsi' => 'Hailing from Indias coast, Harbor storms the field wielding ancient technology with dominion over water. He unleashes frothing rapids and crushing waves to shield his allies, or pummel those that oppose him.'
            ],
            [
                'nama' => 'Gekko',
                'icon' => 'Gekko_icon.webp',
                'agentimage' => 'Gekko.png',
                'deskripsi' => 'Gekko the Angeleno leads a tight-knit crew of calamitous creatures. His buddies bound forward, scattering enemies out of the way, with Gekko chasing them down to regroup and go again.'
            ],
            [
                'nama' => 'Deadlock',
                'icon' => 'Deadlock_icon.webp',
                'agentimage' => 'Deadlock.png',
                'deskripsi' => 'Norwegian operative Deadlock deploys an array of cutting-edge nanowire to secure the battlefield from even the most lethal assault. No one escapes her vigilant watch, nor survives her unyielding ferocity.'
            ],
            [
                'nama' => 'Iso',
                'icon' => 'Iso_icon.webp',
                'agentimage' => 'Iso.png',
                'deskripsi' => 'Chinese fixer for hire Iso goes into a flow state to dismantle the opposition. Reconfiguring ambient energy into bulletproof protection, he advances with focus towards his next duel to the death.'
            ],
            [
                'nama' => 'Clove',
                'icon' => 'Clove_icon.webp',
                'agentimage' => 'Clove.png',
                'deskripsi' => 'Scottish troublemaker Clove makes mischief for enemies in both the heat of combat and the cold of death. The young immortal keeps foes guessing, even from beyond the grave, their return to the living only ever a moment away.'
            ],
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('agents');

        foreach ($data as $agent) {
            // Check if the agent already exists
            $existingAgent = $builder->getWhere(['nama' => $agent['nama']])->getRowArray();

            if ($existingAgent) {
                // Update the agent if it already exists
                $builder->where('nama', $agent['nama'])->update($agent);
            } else {
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
