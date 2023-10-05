<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('admin.login');
        }
    }

    // public function indexSiswa(Request $request){
    //     $cek = $request->session()->put('nim',$request->nim);
    //     if ($cek) {
    //         return view('index');
    //     } else {
    //         return view('admin.login_siswa');
    //     }
    // }

    public function authLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return response()->json([
                'message' => 'Username atau password salah'
            ]);
        }
    }

    public function authLoginSiswa(Request $request){
        $siswa = siswa::where('nim', $request->nim)->first();
        if ($siswa) {
            $request->session()->put('nim', $siswa->nim);
            
            return redirect()->route('index');
        } else {
           return redirect()->route('loginSiswa');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
