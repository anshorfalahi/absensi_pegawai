<?php

namespace App\Controllers\Pegawai;

use App\Controllers\BaseController;
use App\Models\PresensiModel;
use CodeIgniter\HTTP\ResponseInterface;


class RekapPresensi extends BaseController
{
    public function index()
    {
        $presensiModel = new PresensiModel();
        $data = [
        'title' => 'Rekap Presensi',
        'rekap_presensi' => $presensiModel->rekap_presensi_pegawai()
      ];

         return view('pegawai/rekap_presensi', $data);
    }
}
