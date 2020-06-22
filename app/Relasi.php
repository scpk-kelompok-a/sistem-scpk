<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    protected $table = 'relations';

    protected $fillable = [
        'alternatif', 'kriteria', 'nilai',
    ];
    public $timestamps = false;
    protected $primaryKey = 'id_relasi';
}
