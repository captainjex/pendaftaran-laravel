<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\Divisi;
use App\User;
use App\Peserta;
use App\DatatoPdf;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    //show all Data
    public function users(Request $req)
    {
        //show all data to index
        $blogs = DB::table('pesertas')
            ->join('divisis', 'pesertas.divisi_id', '=', 'divisis.id')
            ->join('users', 'pesertas.diperiksa_oleh', '=', 'users.id')
            ->select('pesertas.*', 'users.name as nana', 'divisis.nama as mama')
            ->get();
        // $blogs = DatatoPdf::all();
        // $users = Peserta::all();
        // view()->share('blogs', $blogs);
        view()->share('blogs', $blogs);
        if ($req->has('download')) {
            # code...
            $peserta = PDF::loadView('pdf')->setPaper('a4', 'landscpae');
            return $peserta->download('pdf');
        }
        return view('cetak');
    }
}
