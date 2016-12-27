<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Peserta;

class Divisi extends Model
{
    public function pesertas(){
        return $this->hasMany(Peserta::class);
    }
}
