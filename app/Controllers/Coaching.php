<?php

namespace App\Controllers;
use App\Models\Schedule;
use App\Models\Home;
use CodeIgniter\HTTP\ResponseInterface;

class Coaching extends BaseController
{
    public function index()
    {
        $scheduleModel = new Schedule();
        $data['coaching'] = $scheduleModel->findAll();
    
        // Ambil nilai token coaching dari session
        $coachingTokens = session()->get('coaching_tokens');
        $data['coaching_tokens'] = $coachingTokens !== null ? $coachingTokens : 0;
    
        $data['message'] = '';
        return view('static/coaching', $data);
    }
    public function payment()
    {
        $homeModel = new Home();
        $homes = $homeModel->findAll();
    
        return view("static/payment", ['homes' => $homes]);
    }
    
    public function create()
    {
        
        // Simpan data ke database
        $schedule = new Schedule();
        $data['coaching'] = $schedule -> findAll();
        $schedule -> insert(
            [
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'jam' => $this->request->getPost('jam'),
                'tanggal' => $this->request->getPost('tanggal'),
                'nama_coach' => $this->request->getPost('nama_coach'),
                'keterangan_coach' => $this->request->getPost('keterangan_coach')
            ]
        );
    
        if ($schedule) {
            $data['message'] = 'Terima Kasih telah mengirimkan data jadwal.';
            return view('static/coaching',$data);
        } else {
            $data['message'] = 'Terjadi kesalahan pada penyimpanan data.';
            return view('static/coaching',$data);
        }
    }

    public function delete($id) {
        $schedules = new schedule();
        $schedules->delete($id);
        return redirect('schedule');
    }

}
