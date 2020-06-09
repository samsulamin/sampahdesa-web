<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Warga;
use\App\Notifikasi;

class wargaController extends Controller
{
    public function index(){
        return view('content.home');
    }

    public function datawarga(){
        $warga = Warga::orderBy('desa_id', 'DESC')->get();
        return view('content.datawarga', compact('warga'));
    }

    public function about(){
        return view('content.about');
    }

    public function laporan(){
        $laporan = Notifikasi::all();
        //$warga = Warga::all();
        return view('content.laporan', compact('laporan'));
    }

    public function cari(Request $request)
    {
        $query = $request->get('search');
        $laporan = Notifikasi::where('created_at', 'LIKE', '%' . $query . '%')->paginate();

        return view('content.laporan', compact('laporan','query'));
    }

    public function notifikasi(){
        return view('content.notifikasi');
    }
}
