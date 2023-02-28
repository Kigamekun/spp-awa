<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class KelasController extends Controller
{
    public function index(){
        $title = 'Kelas';
        $kelas = Kelas::all();
        return view('Kelas.index', compact('kelas', 'title'));
    }

    public function create(){
        $title = 'Tambah-kelas';
        return view('Kelas.create', compact('title'));
    }

    public function tambah(Request $request){
        Kelas::create([
            'nama_kelas'=> $request->nama_kelas,
            'kompetensi_keahlian' => $request ->kompetensi_keahlian
        ]);

        return redirect('/kelas');

    }

    public function store (Request $request){
        Kelas::create([
            'nama_kelas' => $request ->nama_kelas,
            'kompetensi_keahlian' => $request ->kompetensi_keahlian,
        ]);
        return redirect('/kelas');

    }

    public function edit($id){
        $title = 'Edit-Kelas';
        $data = DB::table('kelas')->where('id_kelas', $id)->get();
        return view('Kelas.update' ,compact('data', 'title'));
    }

    public function update(Request $request,$id){
        $kelas = Kelas::where('id_kelas',$id)->update([
            'nama_kelas'=>$request->nama_kelas,
            'kompetensi_keahlian'=>$request->kompetensi_keahlian
        ]);

        return redirect('/kelas');
    }

    public function hapus($id){
        DB::table('kelas')->where('id_kelas',$id)->delete();
        return redirect('/kelas');
    }

    public function cetak_pdf()
    {
    	$kelas = Kelas::all();

    	$pdf = PDF::loadview('Kelas.cetak_pdf',['kelas'=>$kelas]);
    	return $pdf->stream();
    }


}
