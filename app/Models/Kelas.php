<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';

    protected $guarded = [];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
    public function categories()
    {
        return $this->hasMany(Spp::class);
    }
}