<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\DatatoPdf;

class PdfController extends Controller
{
    //show all Data
    public function users(Request $req)
    {
        //show all data to index
        $blogs = DatatoPdf::all();
        view()->share('blogs', $blogs);
        if ($req->has('download')) {
            # code...
            $pdf = PDF::loadView('pdf')->setPaper('a4', 'landscpae');
            return $pdf->download('pdf');
        }
        return view('cetak');
    }
}
