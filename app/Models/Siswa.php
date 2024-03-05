<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $guarded = [];

   //  public function wsiswas()
   // {
       // return $this->belongsToMany('App\Wsiswa', 'wsiswa_id', 'user_id', '<wiswa_id></wiswa_id>');
    //}
    public function wsiswa()
    {
        return $this->belongsTo(Wsiswa::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
