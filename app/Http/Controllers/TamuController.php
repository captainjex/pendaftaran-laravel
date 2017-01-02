<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Tamu;

class TamuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
    }

    public function store(Request $request){

        $tamu = new Tamu();
        $tamu->nama = $request->nama;
        $tamu->email = $request->email;
        $tamu->pesan = $request->pesan;

        $tamu->save();

        return redirect('/');
    }

    public function index()
    {
        $tamus = Tamu::all();

        return view('admin.bukutamu', compact('tamus'));
    }
}
