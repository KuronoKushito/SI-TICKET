<?php

namespace App\Http\Controllers\Tiket;

use App\Http\Controllers\Controller;

class TiketController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'SI-TIKET | DISETUJUI'
        ];
        return view('pages.department.tiket_disetujui.tiket', $data);
    }

    public function proses()
    {
        $data = [
            'title' => 'SI-TIKET | DIPROSES'
        ];
        return view('pages.department.tiket_diproses.tiket', $data);
    }

    public function tolak()
    {
        $data = [
            'title' => 'SI-TIKET | DITOLAK'
        ];
        return view('pages.department.tiket_ditolak.tiket', $data);
    }

    public function selesai()
    {
        $data = [
            'title' => 'SI-TIKET | SELESAI'
        ];
        return view('pages.department.tiket_selesai.tiket', $data);
    }
}
