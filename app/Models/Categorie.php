<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'kelas_id',
        'tahun_ajaran',
        'keterangan',
        'biaya_semester',
        'psb',
        'pts_ganjil',
        'pts_genap',
        'spas',
        'pat',
        'raport',
        'daftar_ulang',
        'un',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

}
