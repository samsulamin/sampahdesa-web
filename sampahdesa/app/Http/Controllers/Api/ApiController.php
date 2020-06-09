<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use App\Notifikasi;
use App\Kelurahan;
use App\Warga;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function index()
    {
        //$oke = Auth::user()->desa_id;
        $warga = Warga::all();
        return $warga;
    }
}
