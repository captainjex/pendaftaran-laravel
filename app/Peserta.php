<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Divisi;
use App\User;

class Peserta extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'diperiksa_oleh');
    }

    public function divisi()
    {
        return $this->belongsTo(\App\Divisi::class);
    }
}
