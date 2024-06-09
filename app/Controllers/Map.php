<?php

namespace App\Controllers;

use App\Models\Maps;
use App\Models\Agents;

class Map extends BaseController
{
    public function index()
    {
        $mapModel = new Maps();
        $data['maps'] = $mapModel->findAll();
        return view("static/maps", $data);
    }

    public function detail($id)
    {
        $mapModel = new Maps();
        $agentModel = new Agents();
        $map = $mapModel->find($id);

        // Daftar ID agen yang ditampilkan berdasarkan ID map
        $mapAgentIds = [
            1 => [1, 12, 13, 5, 21], 
            2 => [11, 4, 8, 10, 13], 
            3 => [1, 12, 13, 5, 21], 
            4 => [1, 12, 13, 5, 21], 
            5 => [1, 12, 13, 5, 21], 
            6 => [1, 12, 13, 5, 21], 
            7 => [1, 12, 13, 5, 21], 
            8 => [1, 12, 13, 5, 21], 
            9 => [1, 12, 13, 5, 21], 
            10 => [1, 12, 13, 5, 21], 
        ];

        // Periksa apakah map ditemukan dan ambil agen yang sesuai
        if ($map) {
            $agents = [];
            if (isset($mapAgentIds[$id])) {
                $agentIds = $mapAgentIds[$id];
                $agentsData = $agentModel->whereIn('id', $agentIds)->findAll();

                // Buat array asosiatif dengan ID agen sebagai kunci
                $agentsAssoc = [];
                foreach ($agentsData as $agent) {
                    $agentsAssoc[$agent['id']] = $agent;
                }

                // Urutkan agen sesuai dengan urutan dalam array $agentIds
                foreach ($agentIds as $agentId) {
                    if (isset($agentsAssoc[$agentId])) {
                        $agents[] = $agentsAssoc[$agentId];
                    }
                }
            }

            return view("static/map_detail", ['map' => $map, 'agents' => $agents]);
        } else {
            // Jika map tidak ditemukan, alihkan kembali ke halaman daftar maps dengan pesan error
            return redirect()->to('/maps')->with('error', 'Map tidak ditemukan.');
        }
    }
}
