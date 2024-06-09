<?php

namespace App\Controllers;
use App\Models\Agents;

class Agent extends BaseController
{
    public function index()
    {
        $agent = New Agents();

        $data['agents'] = $agent->findAll();
        return view("static/agents",$data);
    }
    public function detail($id)
    {
        $agentModel = new Agents();
        $agent = $agentModel->find($id);

        if ($agent) {
            return view("static/agent_detail", ['agent' => $agent]);
        } else {
            // agent not found, you can handle this case accordingly
            return redirect()->to('/agents')->with('error', 'agent not found.');
        }
    }
}
