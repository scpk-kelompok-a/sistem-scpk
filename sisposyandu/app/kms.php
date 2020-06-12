<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kms extends Model
{
    protected $table = 'kms';

    protected $primaryKey = 'id_kms';

    protected $fillable = [
        'id_kms',
        'nama_lansia',
        'nama_pendamping',
        'usia',
        'jenis_kelamin',
        'alamat',
        'berat',
        'suhu',
        'tekanan_darah',
        'keluhan', 
        'riwayat_penyakit',
        'pola_hidup',
        'pola_makan',
    ];
}
