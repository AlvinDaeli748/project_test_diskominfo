<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PengaduanController extends BaseController
{
    public function report()
    {
        return view('halaman_utama');
    }
}
