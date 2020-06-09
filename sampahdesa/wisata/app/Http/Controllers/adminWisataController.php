<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminWisataController extends Controller
{
    //
    public function index(){
        return view('content.home');
    }

    public function dataWisata(){
        return view('content.dataWisata');
    }
    
    public function addWisata(){
        return view('content.addWisata');
    }
    
    public function update(){
        return view('content.updatewisata');
    }
}
