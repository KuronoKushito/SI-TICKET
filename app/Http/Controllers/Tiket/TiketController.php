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
        return view('pages.departement.tiket_disetujui.tiket', $data);
    }

    public function tproses()
    {
        $data = [
            'title' => 'SI-TIKET | DIPROSES'
        ];
        return view('pages.departement.tiket_diproses.tiket', $data);
    }

    public function ttolak()
    {
        $data = [
            'title' => 'SI-TIKET | DITOLAK'
        ];
        return view('pages.departement.tiket_ditolak.tiket', $data);
    }

    public function tselesai()
    {
        $data = [
            'title' => 'SI-TIKET | SELESAI'
        ];
        return view('pages.departement.tiket_selesai.tiket', $data);
    }
}
