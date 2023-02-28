<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Transaksi;
use App\Models\Trasanksi;
use PDF;
use Illuminate\Support\Facades\Auth;
class PembayaranController extends Controller
{
    public function index()
    {
        $title = 'Pembayaran';
        $item = 'Data Pembayaran';
        $data = Transaksi::all();
        return view('Pembayaran.index', ['data'=>$data, 'title'=>$title, 'halo'=>$item]);
    }

    public function create()
    {
        $title = 'Tambah-Pembayaran';
        $kelas = Kelas::all();
        $spp = Spp::all();
        $siswa = Siswa::all();
        $petugas = Petugas::all();
        $item = 'Data Pembayaran';
        return view('Pembayaran.create', compact('title', 'item', 'kelas', 'spp', 'siswa', 'petugas'));
    }

    public function tambah(Request $request)
    {
        Transaksi::create([
            'nisn'=>$request->nisn,

            'tgl_bayar'=>$request->tgl_bayar,
            'id_petugas'=>$request->id_petugas,
            'bulan_dibayar'=>$request->bulan_dibayar,
            'tahun_dibayar'=>$request->tahun_dibayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar,
        ]);

        return redirect('/pembayaran');
    }

    public function store(Request $request)
    {
        Transaksi::create([
            'nisn'=>$request->nisn,
            'tgl_bayar'=>$request->tgl_bayar,
            'id_petugas'=>$request->id_petugas,
            'bulan_dibayar'=>$request->bulan_dibayar,
            'tahun_dibayar'=>$request->tahun_dibayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar,
        ]);

        return redirect('/pembayaran');
    }

    public function edit($id)
    {
        $title = 'Edit-Pembayaran';
        $data = DB::table('pembayaran')->where('id_pembayaran', $id)->first();
        return view('Pembayaran.update', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        Transaksi::where('id_pembayaran',$id)->update([
            'nisn'=>$request->nisn,
            'tgl_bayar'=>$request->tgl_bayar,
            'id_petugas'=>$request->id_petugas,
            'bulan_dibayar'=>$request->bulan_dibayar,
            'tahun_dibayar'=>$request->tahun_dibayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar,
        ]);
        return redirect('/pembayaran');
    }

    public function hapus($id)
    {
        DB::table('pembayaran')->where('id_pembayaran', $id)->delete();
        return redirect('/pembayaran');
    }

    public function cetak_pdf()
    {
        if (Auth::check()) {
            $pembayaran = Transaksi::where('nisn',Auth::user()->nisn)->get();

        } else {
            $pembayaran = Transaksi::all();

        }
        $pdf = PDF::loadview('Pembayaran.cetak_pdf', ['pembayaran'=>$pembayaran]);
        return $pdf->stream();
    }

    public function history_pembayaran()
    {
        $title = 'Pembayaran';
        $item = 'Data Pembayaran';
        $data = Transaksi::where('nisn',Auth::user()->nisn)->get();
        return view('Pembayaran.index', ['data'=>$data, 'title'=>$title, 'halo'=>$item]);
    }
}
