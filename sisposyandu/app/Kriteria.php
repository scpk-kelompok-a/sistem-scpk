<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    public $timestamps = false;

    protected $table = 'kriteria';

    protected $primaryKey = 'id_kriteria';

    protected $fillable = [
        'kode',
        'nama_kriteria',
        'sifat',
        'bobot'
    ];
}
