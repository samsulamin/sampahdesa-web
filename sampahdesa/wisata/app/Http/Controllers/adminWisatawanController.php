<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminWisatawanController extends Controller
{
    //
    public function dataWisatawan()
    {
        return view('content.dataWisatawan');
    }

    public function addWisatawan()
    {
        return view('content.addWisatawan');
    }

    public function about()
    {
        return view('content.about');
    }
    
    public function contact()
    {
        return view('content.contact');
    }
}
