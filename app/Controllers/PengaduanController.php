<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PengaduanModel;

class PengaduanController extends BaseController
{
    public function report()
    {
        $this->db = \Config\Database::connect();
        $builder = $this->db->table('laporan')->select('*');
        $query = $builder->orderBy('id', 'ASC')->get();
        $data['dataLaporan'] = $query->getResult();

        return view('halaman_utama',$data);
    }

    public function add_data()
    {
        $model = new PengaduanModel();

        $model->insert([
            'nama'=>$this->request->getPost('nama'),
            'alamat'=>$this->request->getPost('alamat'),
            'tipe_laporan'=>$this->request->getPost('tipe_laporan'),
            'deskripsi'=>$this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/laporan');

    }
}
