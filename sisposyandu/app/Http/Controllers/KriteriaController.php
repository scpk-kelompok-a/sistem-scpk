<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;

class KriteriaController extends Controller
{
    public function __construct()
    {
       
    }

    public function index()
    {
    	$data = Kriteria::all();
    	return view('kriteria.home', compact('data'));
    }

    public function insert(Request $request)
    {
    	$input = $request->all();
    	$insert = Kriteria::create([
    	    'kode' => $input['kode'],
    	    'nama_kriteria' => $input['nama_kriteria'],
    	    'sifat' => $input['sifat'],
    	    'bobot' => $input['bobot'],
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
    	$data = Kriteria::find($id);
    	return view('kriteria.edit', compact('data'));
    }

    public function update(Request $request)
    {
    	$input = $request->id;
    	$data = Kriteria::find($input);
    	$data->kode = $request->kode;
    	$data->nama_kriteria = $request->nama_kriteria;
    	$data->sifat = $request->sifat;
    	$data->bobot = $request->bobot;
    	$data->update();

    	return redirect('kriteria');
    }

    public function delete($id)
    {
    	Kriteria::destroy($id);
    	return redirect()->back();
    }
}
