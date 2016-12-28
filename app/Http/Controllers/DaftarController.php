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
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    public function admin()
    {
        return view('admin.tes');
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
        $peserta->slug = str_slug($peserta->email);


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

    public function show($id)
    {

    }

    public function edit($id)
    {
        $peserta = Peserta::where('id',$id)->first();
        if (Auth::user()){
            return view('admin.edit', compact('peserta'));
        } else{
            return redirect()->to("/peserta");
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $peserta = Peserta::find($id);

        $peserta->diperiksa_oleh = $request->input('diperiksa_oleh');

        $peserta->save();

        return redirect('/peserta');

    }
}
