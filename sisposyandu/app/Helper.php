<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kriteria;
use App\Alternatif;
use App\Relasi;

class Helper extends Model
{
    public static function bobot($bobot){
		if ($bobot == 1) {
			echo "Tidak Penting";
		}else if($bobot == 2){
			echo "Kurang Penting";
		}else if($bobot == 3){
			echo "Cukup Penting";
		}else if($bobot == 4){
			echo "Penting";
		}else if($bobot == 5){
			echo "Sangat Penting";
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

	public static function nilai_atribut($id)
	{
		$data = Kriteria::find($id);
		return $data->atribut;
	}

	public static function jabatan($id)
	{
		$data = User::find($id);
		return $data->jabatan;
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
