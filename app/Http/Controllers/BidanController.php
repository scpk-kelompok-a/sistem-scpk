<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KMS;
use App\Kriteria;
use App\Alternatif;
use App\Relasi;
use App\Result;

class BidanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kms = KMS::all();
        $krit = Kriteria::all();
        $alt = Alternatif::all();
        return view('/bidan/datalansia', compact('kms'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KMS $kms, $id)
    {
        $kms = KMS::find($id);

        return view('/bidan/detdatalansia', compact('kms'));
    }

    public function view()
    {
        $alt = Alternatif::all();

        return view('hasil', compact('alt'));
    }

    public function hasil()
    {
        // $kms = KMS::find($id);

        $kriteria = Kriteria::all();
    	foreach ($kriteria as $keyK => $dataK) {
    		$id_kriteria[] = $dataK->id_kriteria;
    		$bobot[] = $dataK->bobot;
    		$sifat[] = $dataK->sifat;
    	}
    	$alternatif = Alternatif::all();
    	foreach ($alternatif as $keyT => $dataT) {
    		$id_alternatif[] = $dataT->id_alternatif;
        }
        $kms = KMS::all();
    	foreach ($kms as $keyS => $dataS) {
            $id[] = $dataS->id;
            $berat[] = $dataS->berat;
            $suhu[] = $dataS->suhu;
            $sesak_nafas[] = $dataS->sesak_nafas;
            $pusing[] = $dataS->pusing;
            $masuk_angin[] = $dataS->masuk_angin;
            $diabetes[] = $dataS->diabetes;
            $darah_tinggi[] = $dataS->darah_tinggi;
            $makanan_berlemak_tinggi[] = $dataS->makanan_berlemak_tinggi;
            $berolahraga[] = $dataS->berolahraga;
        }
        $jmlh_kms = $kms->count();

        // dd($bobot);
    	$relasi = Relasi::all();
    	$jmlh_bobot = $kriteria->sum('bobot');
    	$jmlh_kriteria = $kriteria->count();
        $jmlh_alternatif = $alternatif->count();
        

    	//Tahap 1 = Mencari Perpangkatan dari masing-masing bobot
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $nilai[$j][$i] = \App\Helper::nilai($id_alternatif[$j],$id_kriteria[$i]);
                $pangkat_kriteria[$j][$i] = pow($nilai[$j][$i], 2);
            }
        }
        // dd($pangkat_kriteria);

        //Tahap 2 = Mencari Total Perpangkatan Sebelumnya per-kriteria
        $jmlh_pangkat = array();
        for ($i=0;$i<$jmlh_kriteria;$i++){
            $jmlh_pangkat[$i] = 0;
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $jmlh_pangkat[$i] += $pangkat_kriteria[$j][$i];
            }
        }

        //Tahap 3 = Normalisasi
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $nilai[$j][$i] = \App\Helper::nilai($id_alternatif[$j],$id_kriteria[$i]);
                $normalisasi[$j][$i] = $nilai[$j][$i] / sqrt($jmlh_pangkat[$i]);
            }
        }

        //Tahap 4 = Normalisasi Terbobot
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $normalisasi_terbobot[$j][$i] = $bobot[$i] * $normalisasi[$j][$i];
            }
        }
        // dd($normalisasi_terbobot);

        //Tahap 5 = Matriks Solusi Ideal (Positif dan Negatif)
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $array[$i][$j] = $normalisasi_terbobot[$j][$i];
                $positif[$i] = max($array[$i]);
                $negatif[$i] = min($array[$i]);
            }
        }
        // dd($negatif);

        //Tahap 6 = Jarak Solusi (Positif dan Negatif)
        $total_positif = array();
        $total_negatif = array();
        for ($i=0;$i<$jmlh_alternatif;$i++){
            $total_positif[$i] = 0;
            $total_negatif[$i] = 0;
            for ($j=0;$j<$jmlh_kriteria;$j++){
                $total_positif[$i] += pow(($positif[$j] - $normalisasi_terbobot[$i][$j]), 2);
                $total_negatif[$i] += pow(($negatif[$j] - $normalisasi_terbobot[$i][$j]), 2);
            }
            $hasil_positif[$i] = sqrt($total_positif[$i]);
            $hasil_negatif[$i] = sqrt($total_negatif[$i]);
        }

        // dd($hasil_positif);

        //Tahap 7 = Mencari Preferensi
        for ($i=0;$i<$jmlh_alternatif;$i++){
            $preferensi[$i] = $hasil_negatif[$i] / ($hasil_positif[$i]+$hasil_negatif[$i]);
             //menyimpan data
             $data = Result::firstOrNew(array('alternatif' => $id_alternatif[$i]));
             $data['alternatif'] = $id_alternatif[$i];
             $data['hasil'] = $preferensi[$i];
             $data->save();
        }
        // dd($preferensi);

    	//proses perangkingan nilai
        $rangking = Result::orderBy('hasil','desc')->get();
        
        return view('hasil', compact('kriteria','alternatif','relasi','jmlh_kriteria','jmlh_alternatif','normalisasi','normalisasi_terbobot','positif','negatif','hasil_positif','hasil_negatif','preferensi','rangking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
