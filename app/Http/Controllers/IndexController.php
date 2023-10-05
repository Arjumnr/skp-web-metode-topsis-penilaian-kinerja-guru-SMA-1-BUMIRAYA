<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kriteria;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $cek = $request->session()->has('nim');
        if ($cek) {

            $data = kriteria::all();
            $dataGuru = guru::all();
        
            // return response()->json($data);
            return view('index', compact('data', 'dataGuru')); 
        } else {
            return view('admin.login_siswa');
        }
       
    }
}
