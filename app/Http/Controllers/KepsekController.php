<?php

namespace App\Http\Controllers;

use \App\Kurikulum;
use PDF;
class KepsekController extends Controller
{
    public function index()
    {
        $data = Kurikulum::latest()->get();
        return view('kepsek.index', compact('data'));
    }

    public function generate_report()
    {
        $data = Kurikulum::latest()->get();
        // generate to pdf
        $pdf = PDF::loadview('kepsek.laporan', compact('data'));
        return $pdf->download('laporan-supervisi-digital');
    }
}
