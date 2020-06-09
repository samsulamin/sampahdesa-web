<?php

namespace App\Http\Controllers;
use App\Petugas;

use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function index(){
        return view('content.home');
    }

    public function datapetugas(){
        $petugas = Petugas::orderBy('desa_id', 'DESC')->get();
        return view('content.datapetugas', compact('petugas'));
    }
    
}
