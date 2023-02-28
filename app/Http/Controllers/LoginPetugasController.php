<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginPetugasController extends Controller
{
    public function index()
    {
        $title = 'Login Petugas';
        return view('login.login-petugas', compact('title'));
    }

    public function store(Request $request)
    {
        $petugas = Petugas::where('username', $request->username)->where('password', $request->password)->get()->first();
        if(is_null($petugas)){
            return redirect('/login')->withErrors(['username'=> "Akun tidak ditemukan"]);

        }

        Session::put('user',$petugas);
        Session::put('login', True);

        return redirect('/home')->with('welcome', 'Selamat datang' . $petugas->nama_petugas);
    }

    public function delete()
    {
        Session::forget('login');
        Session::forget('user');

        return redirect('/home')->with('logout', 'Anda berhasil logout');
    }
}
