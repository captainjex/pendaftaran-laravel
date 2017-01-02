<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Berita;

class BeritaController extends Controller
{
    public function create(){
        return view('admin.beritatambah');
    }

    public function store(Request $request){
        $this->validate($request, [
           'title' => 'required|unique:beritas|max:255',
           'body' => 'required',
        ]);

        $berita = new Berita();
        $berita->title = $request->title;
        $berita->body = $request->body;
        $berita->slug = str_slug($request->title);
        $berita->user_id = $request->user()->id;

        $berita->save();

        return redirect('/admin');
    }

    public function index()
    {
        $beritas = Berita::all();
        $users = User::all();

        return view('admin.berita', compact('beritas', 'users'));
    }

    public function show($slug)
    {
        $berita = Berita::whereSlug($slug)->first();
        return view('berita.lihat', compact('berita'));
    }
}
