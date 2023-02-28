<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'Siswa';
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $spp = Spp::all();

        return view('Siswa.index', compact('siswa', 'kelas', 'title', 'spp'));
    }
    public function create()
    {
        $title = 'Siswa-Create';
        $kelas = Kelas::all();
        $spp = Spp::all();

        return view('Siswa.create', compact('title', 'kelas', 'spp'));
    }

    public function tambah(Request $request)
    {
        Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama'=> $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
            'password' => $request->password,
        ]);

        return redirect('/siswa');
    }

    public function store(Request $request)
    {
        Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama'=> $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'id_spp' => $request->id_spp,

        ]);

        return redirect('/siswa');
    }

    public function edit($id)
    {
        $title = 'Edit- Siswa';
        $data = DB::table('siswa')->where('nisn', $id)->first();
        return view('Siswa.update', compact('data', 'title'));
    }


    public function update(Request $request, $id)
    {
        $siswa = Siswa::where('nisn', $id)->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama'=> $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,

        ]);

        return redirect('/siswa');
    }

    public function hapus($id)
    {
        DB::table('siswa')->where('nisn', $id)->delete();
        return redirect('/siswa');
    }

    public function cetak_pdf()
    {
        $siswa = Siswa::all();

        $pdf = PDF::loadview('Siswa.cetak_pdf', ['siswa'=>$siswa]);
        return $pdf->stream();
    }
}
