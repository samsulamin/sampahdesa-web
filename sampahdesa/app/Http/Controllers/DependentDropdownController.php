<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Kecamatan;
use App\Kelurahan;

class DependentDropdownController extends Controller
{
    //
    public function index() {
        $categories = Kecamatan::orderBy('id', 'asc')->get();
        return view('pagesdesa.drop', compact('categories'));
    }
     
    public function postData() {
        switch(Input::get('type')):
            case 'kota':
                $return = '<option value=""></option>';
                foreach(Kota::where('propinsi_id', Input::get('id'))->get() as $row) 
                    $return .= "<option value='$row->id'>$row->kota</option>";
                return $return;
            break;
            case 'kecamatan':
                $return = '<option value=""></option>';
                foreach(Kecamatan::where('kota_id', Input::get('id'))->get() as $row) 
                    $return .= "<option value='$row->id'>$row->kecamatan</option>";
                return $return;
            break;
            case 'desa':
                $return = '<option value=""></option>';
                foreach(Desa::where('kecamatan_id', Input::get('id'))->get() as $row) 
                    $return .= "<option value='$row->id'>$row->desa</option>";
                return $return;
            break;
        endswitch;
    }
}
