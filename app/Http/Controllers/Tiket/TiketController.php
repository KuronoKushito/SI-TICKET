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
}
