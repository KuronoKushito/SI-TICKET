<?php

namespace App\Http\Controllers\Tiket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function index()
    {
        return view('pages.departement.tiket_disetujui.tiket');
    }

    public function tproses()
    {
        return view('pages.departement.tiket_diproses.tiket');
    }

    public function ttolak()
    {
        return view('pages.departement.tiket_ditolak.tiket');
    }

    public function tselesai()
    {
        return view('pages.departement.tiket_selesai.tiket');
    }
}
