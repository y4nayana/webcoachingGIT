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
            3 => [11, 5, 12, 10, 13], 
            4 => [11, 16, 8, 10, 4], 
            5 => [11, 5, 8, 21, 4], 
            6 => [11, 4, 16, 5, 6], 
            7 => [18, 9, 1, 16, 17], 
            8 => [11, 5, 13, 20, 8], 
            9 => [12, 5, 19, 10, 8], 
            10 => [12, 21, 9, 10, 6], 
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
