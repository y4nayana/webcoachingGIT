<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Home;

class About extends BaseController
{

    public function index()
    {
        $homeModel = new Home();
        $homes = $homeModel->findAll();
    
        return view("static/about", ['homes' => $homes]);
    }
    public function coaching() 
    {
        return view ("static/coaching");
    }
    public function plus()
    {
        $data ['message'] = '';
        return view ("static/schedule");
    }

}
