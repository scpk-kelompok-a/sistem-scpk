<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kriteria;
use App\Alternatif;
use App\Relasi;

class Helper extends Model
{
	public static function sifat($sifat){
		if ($sifat == 1) {
			echo "Benefit";
		}else if($sifat == 2){
			echo "Cost";
		}
	}
    public static function bobot($bobot){
		if ($bobot == 1) {
			echo "1";
		}else if($bobot == 2){
			echo "2";
		}else if($bobot == 3){
			echo "3";
		}else if($bobot == 4){
			echo "4";
		}else if($bobot == 5){
			echo "5";
		}
    }
    
    public static function nilai($alternatif,$kriteria)
	{
		$data = Relasi::where('alternatif',$alternatif)->where('kriteria',$kriteria)->orderBy('nilai','ASC')->get();
		foreach ($data as $key => $value) {
			return $value->nilai;
		}
	}

	public static function kriteria($id)
	{
		$data = Kriteria::find($id);
		return $data->nama_kriteria;
	}

	public static function nilai_sifat($id)
	{
		$data = Kriteria::find($id);
		return $data->sifat;
	}


	public static function kode($id)
	{
		$data = Kriteria::find($id);
		return $data->kode;
	}

	public static function alternatif($id)
	{
		$data = Alternatif::find($id);
		return $data->nama;
	}
}
