<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\PengaduanModel;

class PengaduanController extends BaseController
{
    public function report()
    {
        return view('halaman_utama');
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
