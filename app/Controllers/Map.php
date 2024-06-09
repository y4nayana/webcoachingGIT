<?php

namespace App\Controllers;
use App\Models\Maps;

class Map extends BaseController
{
    public function index()
    {
        $map = New Maps();

        $data['maps'] = $map->findAll();
        // print_r($data);
        return view("static/maps",$data);
    }
}
