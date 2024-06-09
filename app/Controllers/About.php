<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class About extends BaseController
{
        // public $data = [
        //     'services' => [
        //     [
        //         'id' => 1,
        //         'name' => 'Pengajaran',
        //         'image' => 'nature.jpg',
        //         'description' => 'Perjuangan tinggi memiliki peran untuk menyelenggarakan proses belajar mengajar dengan tujuan untuk menghasilkan lulusan yang memiliki kompetensi dan kualifikasi yang dibutuhkan oleh masyarakat dan industri.'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Penelitian',
        //         'image' => 'nature2.jpg',
        //         'description' => 'Perguruan tinggi dituntut untuk melakukan penelitian yang dapat berkontribusi terhadap pengembangan ilmu pengetahuan, teknologi, dan/atau seni.'
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Pengabdian Kepada Masyarakat',
        //         'image' => 'nature3.jpg',
        //         'description' => 'Perguruan tinggi memberikan kontribusi positif kepada masyarakat melalui berbagai program pengabdian.'
        //     ]
        //     ]
        // ];

    public function index()
    {
        return view("static/about");
    }
    public function services()
    {
        //return view("static/services", $this->data);
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

    // public function viewServices($id) 
    // {
    //     $services = $this->data['services'];
    //     $found = null;
    //     foreach ($services as $service) {
    //         if ($service['id'] == $id) {
    //             $found = $service;
    //         }
    //     }
    //     if($found) {
    //         // var_dump($found);
    //         $data['service']=$found;
    //         return view ('static/detailService',$data);
    //     }else {
    //         echo "Not Found";
    //     }
    // }
}
