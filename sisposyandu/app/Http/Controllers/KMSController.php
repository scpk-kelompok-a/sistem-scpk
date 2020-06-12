<?php

namespace App\Http\Controllers;

use App\kms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $querykms = DB::select("SELECT nama_lansia, alamat FROM kms");
        return view('riwayat', ['querykms' => $querykms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kms  $kms
     * @return \Illuminate\Http\Response
     */
    public function show(kms $kms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kms  $kms
     * @return \Illuminate\Http\Response
     */
    public function edit(kms $kms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kms  $kms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kms $kms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kms  $kms
     * @return \Illuminate\Http\Response
     */
    public function destroy(kms $kms)
    {
        //
    }
}
