<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class SppController extends Controller
{
    public function index(){
        $title = 'Spp';
        $spp = Spp::all();

        return view('Spp.index', compact('title', 'spp'));
    }
    public function create(){
        $title = 'Spp-Create';
        $spp = Spp::all();
        return view('Spp.create', compact('title', 'spp'));
    }

    public function tambah(Request $request){
        Spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);

        return redirect('/spp');
    }

    public function store (Request $request){
        Spp::create([
            'tahun' => $request ->tahun,
            'nominal' => $request ->nominal,
        ]);
        return redirect('/spp');

    }

    public function edit($id){
        $title = 'Edit- Spp';
        $data = DB::table('spp')->where('id_spp', $id)->get();
        return view('Spp.update' ,compact('data', 'title'));
    }


    public function update(Request $request,$id){
        $spp = Spp::where('id_spp',$id)->update([
            'tahun' => $request ->tahun,
            'nominal' => $request ->nominal,
        ]);

        return redirect('/spp');
    }

    public function hapus($id){
        DB::table('spp')->where('id_spp',$id)->delete();
        return redirect('/spp');
    }

    public function cetak_pdf()
    {
    	$spp = Spp::all();
 
    	$pdf = PDF::loadview('spp.cetak_pdf',['spp'=>$spp]);
    	return $pdf->stream();
    }

}
