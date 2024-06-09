<?php

namespace App\Controllers;
use App\Models\Agents;

class Agent extends BaseController
{
    public function index()
    {
        $agent = New Agents();

        $data['agents'] = $agent->findAll();
        // print_r($data);
        return view("static/agents",$data);
    }
}
