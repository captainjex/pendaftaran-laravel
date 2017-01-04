<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Peserta;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pesertas(){
        return $this->hasMany(Peserta::class);
    }

    public function beritas(){
        return $this->hasMany(Berita::class);
    }

    public function datatoPdf(){
        return $this->hasMany(DatatoPdf::class);
    }

    public function getAvatar()
    {
        return "https://www.gravatar.com/avatar/" . md5($this->email) . "?d=mm&s=50";
    }
}
