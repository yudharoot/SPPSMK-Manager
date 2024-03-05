<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
   protected $table = 'pembayarans';

   protected $fillable = [
       'wsiswa_id',
       'categorie_id',
       'bulan',
       'tahun_ajaran',
        'biaya_semester',
        'psb',
        'pts_ganjil',
        'pts_genap',
        'spas',
        'pat',
        'raport',
        'daftar_ulang',
        'un',
        'total_bayar',
        'tgl_bayar',
   ];

   public function wsiswa()
   {
       return $this->belongsTo(Wsiswa::class);
   }
   public function categorie()
   {
       return $this->belongsTo(Categorie::class);
   }

}
