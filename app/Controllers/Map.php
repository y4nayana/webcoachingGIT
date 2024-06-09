<?php

namespace App\Controllers;

use App\Models\Maps;

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
        $map = $mapModel->find($id);

        if ($map) {
            return view("static/map_detail", ['map' => $map]);
        } else {
            // Map not found, you can handle this case accordingly
            return redirect()->to('/maps')->with('error', 'Map not found.');
        }
    }
    public function detailmap($id) 
    {
        $mapModel = new Maps();
        $map = $mapModel->find($id);
        if($map) {
            $data['map'] = $map;
            return view("static/map_detail", $data);
        } else {
            echo "Not Found";
        }
    }
    
}

