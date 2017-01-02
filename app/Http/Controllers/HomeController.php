<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        $users = User::all();

        return view('home', compact('beritas', 'users'));
    }

    public function show($slug)
    {
        $berita = Berita::whereSlug($slug)->first();
        return view('berita.lihat', compact('berita'));
    }
}
