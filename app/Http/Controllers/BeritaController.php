<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Berita;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function edit($slug)
    {
       $berita = Berita::where('slug',$slug)->first();
       if($berita && (Auth::user()->id == $berita->user_id )){
           return view('berita.edit')->with('berita',$berita);
       }else {
           return redirect('/')->withErrors('Kamu tidak boleh mengakses halaman');
       }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $berita = Berita::find($id);

        $berita->title = $request->input('title');
        $berita->body = $request->input('body');
        $berita->slug = str_slug($berita->title);

        $berita->save();

        return redirect('/list-berita');

    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect('/list-berita');

    }

}
