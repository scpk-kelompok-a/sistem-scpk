<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KMS;

class KMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kms = KMS::all();
        return view('/kader/riwayat', compact('kms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/kader/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lansia' => 'required',
            'nama_pendamping' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'berat' => 'required',
            'suhu' => 'required',
            'tekanan_darah' => 'required',
            'keluhan' => 'required',
            'riwayat_penyakit' => 'required',
            'pola_hidup' => 'required',
            'pola_makan' => 'required'
        ]);
        $show = KMS::create($validatedData);

        return redirect('/kms')->with('success', 'KMS berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KMS $kms, $id)
    {
        $kms = KMS::find($id);

        return view('/kader/detdata', compact('kms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_lansia' => 'required',
            'nama_pendamping' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'berat' => 'required',
            'suhu' => 'required',
            'tekanan_darah' => 'required',
            'keluhan' => 'required',
            'riwayat_penyakit' => 'required',
            'pola_hidup' => 'required',
            'pola_makan' => 'required'
        ]);

        KMS::whereId($id)->update($validatedData);

        return redirect('/kms')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kms = KMS::findOrFail($id);
        $kms->delete();

        return redirect('/kms');
    }
}
