<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'SI-TIKET | DASHBOARD'
        ];
        return view('pages.admin.dashboard', $data);
    }
}
