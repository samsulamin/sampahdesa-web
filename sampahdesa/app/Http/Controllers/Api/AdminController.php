<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Desa;
use App\User;
use App\Kelurahan;
use App\Kecamatan;

class AdminController extends Controller
{
    public function index(Request $request){
        $desa = Desa::all();
        return response([
            //'data' => 
            $desa 
        ], 200);
    }
}
