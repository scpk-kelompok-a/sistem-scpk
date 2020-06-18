<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\Alternatif;
use App\Relasi;

class AlternatifController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
    	$data = Alternatif::all();
    	return view('alternatif.home', compact('data'));
    }

    public function insert(Request $request)
    {
    	$input = $request->all();
    	$insert = Alternatif::create([
    	    'nama_alternatif' => $input['nama_alternatif'],
    	    // 'alamat' => $input['alamat'],
    	    // 'no_hp' => $input['no_hp'],
    	]);
    	// if ($insert) {
    	//     return redirect('tanaman');  
    	// } else {
    	           
    	// } 
    	return redirect()->back();
    	// return redirect()->back()->withErrors(array('war' => 'success'));
    }

    public function edit($id)
    {
    	$data = Alternatif::find($id);
    	return view('alternatif.edit', compact('data'));
    }

    public function update(Request $request)
    {
    	$input = $request->id;
    	$data = Alternatif::find($input);
    	$data->nama_alternatif = $request->nama_alternatif;
    	// $data->alamat = $request->alamat;
    	// $data->no_hp = $request->no_hp;
    	$data->update();

    	return redirect('alternatif');
    }

    public function delete($id)
    {
    	Alternatif::destroy($id);
    	return redirect()->back();
    }

    public function value($id)
    {
    	$kriteria = Kriteria::all();
    	$alternatif = Alternatif::find($id);
    	return view('alternatif.penilaian', compact('kriteria','alternatif'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $kriteria = Kriteria::all();
        foreach ($kriteria as $key => $value) {
            $data = Relasi::firstOrNew(array('alternatif' => $input['id_alternatif'],'kriteria' => $value->id_kriteria));
            $data['alternatif'] = $input['id_alternatif'];
            $data['kriteria'] = $value->id_kriteria;
            $data['nilai'] = $input['nilai_'.$value->id_kriteria.''];
            $data->save();
        }
        return redirect('alternatif');
    }

    public function show($id)
    {
        $data = Relasi::where('alternatif',$id)->get();
        foreach ($data as $key => $value) {
            $nilai[] = $value->nilai;
            $kriteria[] = $value->kriteria;
        }
        $jumlah = $data->count();
        // for ($i=0;$i<$jumlah;$i++){
        //     echo \App\Helper::kriteria($kriteria[$i])." ".$nilai[$i];
        //     echo "<br>";
        // }
        $nama = \App\Helper::alternatif($id);
        // $alamat = \App\Helper::alamat($id);
        // $no_hp = \App\Helper::no_hp($id);
        return view('alternatif.detail', compact('nilai','kriteria','jumlah','nama','alamat','no_hp'));
    }
}
