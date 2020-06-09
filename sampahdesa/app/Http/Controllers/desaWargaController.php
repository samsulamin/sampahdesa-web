<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use App\Warga;
use Illuminate\Support\Facades\Auth;

class desaWargaController extends Controller
{
    //

    public function index(){
        $oke = Auth::user()->desa_id;
        $kelurahan = Desa::where('id', $oke)->get();
        $warga = Warga::where('desa_id', $oke)->get();
        return view('pagesdesa.desadatawarga', compact('warga', 'kelurahan'));
    }

    public function store(Request $request){
        Warga::create([
    		'namawarga' => $request->namawarga,
    		'email' => $request->emailwarga,
            'password' => bcrypt($request->password),
            'desa_id'=> $request->desa,
            'rt'=> $request->rt,
            'rw'=> $request->rw,
            'jeniskelamin'=> $request->jk,
            'latittude'=> $request->latittude,
            'longitude'=> $request->longitude
        ]);
 
    	return redirect('/desadatawarga');
    }

    public function edit($id){
        $kelurahan = Desa::all();
        $warga = Warga::find($id);
        return view('pagesdesa.editwarga', compact('kelurahan', 'warga'));
    }

    public function update(Request $request){
        Warga::where('id',$request->id)
            ->update([
                'namawarga' => $request->namawarga,
                'email' => $request->emailwarga,
                'desa_id'=> $request->desa,
                'rt'=> $request->rt,
                'rw'=> $request->rw,
                'jeniskelamin'=> $request->jk,
                'latittude'=> $request->latittude,
                'longitude'=> $request->longitude
        ]);

    	return redirect('/desadatawarga');
    }

    public function delete($id)
    {
            $warga = Warga::find($id);
            $warga->delete();
            return redirect('/desadatawarga');
    }

    public function trash(){
        $warga = Warga::onlyTrashed()->get();
        return view('pagesdesa.desatrash', ['warga' => $warga]);
    }

    public function restore($id)
    {
        $warga = Warga::onlyTrashed()->where('id',$id);
        $warga->restore();
        return view('pagesdesa.desatrash', ['warga' => $warga]);
    }
}
