<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wsiswa extends Model
{
   protected $table = 'wsiswas';

   protected $guarded = [];

   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }
   public function pembayarans()
   {
       return $this->hasMany(Pembayaran::class);
   }
   public function siswas()
   {
       return $this->hasMany(Siswa::class);
   }
}
