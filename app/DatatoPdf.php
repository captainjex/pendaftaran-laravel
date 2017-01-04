<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class DatatoPdf extends Model
{
    //
    protected $table = 'pesertas';

    public function user()
    {
        return $this->belongsTo('App\User', 'diperiksa_oleh');
    }
}
