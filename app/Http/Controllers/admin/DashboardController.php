<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   

    public function index()
    {
        $title  = 'Dashboard';
        $jumlahGuru = \App\Models\guru::count();
        $jumlahKriteria = \App\Models\kriteria::count();
        return view('admin.index', compact('title', 'jumlahGuru', 'jumlahKriteria'));
    }
}
