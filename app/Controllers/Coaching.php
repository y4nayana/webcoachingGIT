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
        
        $data['coaching'] = $scheduleModel->where('status !=', 'Accepted')->where('status !=', 'Declined')->findAll();
        
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
    public function accept()
    {
        $scheduleId = $this->request->getPost('id');
        $scheduleModel = new Schedule();
        
        // Lakukan proses penyimpanan untuk menyetujui jadwal dengan ID tertentu
        $selectedSchedule = $scheduleModel->find($scheduleId);
        if ($selectedSchedule) {
            $scheduleModel->update($scheduleId, ['status' => 'Accepted']);
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Jadwal tidak ditemukan']);
        }
    }
    
    public function decline()
    {
        $scheduleId = $this->request->getPost('id');
        $scheduleModel = new Schedule();
        
        // Lakukan proses penyimpanan untuk menolak jadwal dengan ID tertentu
        $selectedSchedule = $scheduleModel->find($scheduleId);
        if ($selectedSchedule) {
            $scheduleModel->update($scheduleId, ['status' => 'Declined']);
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Jadwal tidak ditemukan']);
        }
    }

    public function topup()
    {
        $optionId = $this->request->getPost('id');
        $tokens = 0;
        switch ($optionId) {
            case 3:
                $tokens = 2;
                break;
            case 4:
                $tokens = 5;
                break;
            case 5:
                $tokens = 8;
                break;
        }
        session()->set('coaching_tokens', $tokens);
        return $this->response->setJSON(['success' => true]);
    }
    
    
}
