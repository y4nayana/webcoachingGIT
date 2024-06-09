<?php

namespace App\Controllers;
use App\Models\Schedule;
use CodeIgniter\HTTP\ResponseInterface;

class Coaching extends BaseController
{
    public function index()
    {
        $scheduleModel = new Schedule();
    
        $data['coaching'] = $scheduleModel->where('status !=', 'Accepted')->where('status !=', 'Declined')->findAll();
    
        $data['message'] = '';
        return view('static/coaching', $data);
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
    
    
}