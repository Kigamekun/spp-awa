<?php

namespace App\Http\Controllers\Admin;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;
use Illuminate\Support\Facades\Hash;
class PetugasController extends Controller
{
    public function index(){
        $title = 'Petugas';
        $petugas = Petugas::all();

        return view('Petugas.index', compact('title','petugas'));
    }
    public function create(){
        $title = 'Petugas-Create';
        $petugas = Petugas::all();
        return view('Petugas.create', compact('title', 'petugas'));
    }

    public function tambah(Request $request){
        Petugas::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_petugas'=> $request->nama_petugas,
            'level' => $request->level,
        ]);
        return redirect('/petugas');
    }

    public function store (Request $request){
        Petugas::create([
            'username' => $request ->username,
            'password' => Hash::make($request->password),
            'nama_petugas' => $request ->name_petugas,
            'level' => $request ->level,
        ]);
        return redirect('/petugas');

    }

    public function edit($id){
        $title = 'Edit- Petugas';
        $data = DB::table('petugas')->where('id_petugas', $id)->get();
        return view('Petugas.update' ,compact('data', 'title'));
    }


    public function update(Request $request,$id){
        $petugas = Petugas::where('id_petugas',$id)->update([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'nama_petugas'=>$request->nama_petugas,
            'level'=>$request->level,
        ]);

        return redirect('/petugas');
    }

    public function hapus($id){
        DB::table('petugas')->where('id_petugas',$id)->delete();
        return redirect('/petugas');
    }

    public function cetak_pdf()
    {
    	$petugas = Petugas::all();

    	$pdf = PDF::loadview('Petugas.cetak_pdf',['petugas'=>$petugas]);
    	return $pdf->stream();
    }


}
