<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Divisi;
use App\Peserta;
use App\User;


class DaftarController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create(){
        $divisis = Divisi::all();
        return view('daftar', compact('divisis'));
    }

    public function store(Request $request){

        $peserta = new Peserta();
        $peserta->nama = $request->nama;
        $peserta->email = $request->email;
        $peserta->hp = $request->hp;
        $peserta->divisi_id = $request->divisi;
        $peserta->alasan = $request->alasan;


        $peserta->save();

        return redirect('/daftar');
    }

    public function index()
    {
        $pesertas = Peserta::all();
        $divisis = Divisi::all();
        $users = User::all();

        return view('admin.daftar', compact('pesertas', 'divisis', 'users'));
    }
}
