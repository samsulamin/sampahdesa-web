<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use App\Petugas;
use Illuminate\Support\Facades\Auth;


class desaAdminController extends Controller
{
    //
   
    public function index(){
        $oke = Auth::user()->desa_id;
        $kelurahan = Desa::where('id', $oke)->get();
        $petugas = Petugas::where('desa_id', $oke)->get();
        return view('pagesdesa.desadatapetugas', compact('kelurahan','petugas'));
    }

    public function trash(){
        $petugas = Petugas::onlyTrashed()->get();
        return view('pagesdesa.desatrashpetugas', ['petugas' => $petugas]);
    }

    public function store(Request $request){
        Petugas::create([
    		'namapetugas' => $request->namapetugas,
    		'email' => $request->emailpetugas,
            'password' => bcrypt($request->password),
            'desa_id'=> $request->desa_id,
            'jeniskelamin'=> $request->jk,
            'status'=>1
        ]);
 
    	return redirect('/desadatapetugas');
    }

    public function edit($id){
        $kelurahan = Desa::all();
        $petugas = Petugas::find($id);
        return view('pagesdesa.editpetugas', ['petugas' => $petugas, 'kelurahan' => $kelurahan]);
    }

    public function update(Request $request){
        Petugas::where('id',$request->id)
            ->update([
    		'namapetugas' => $request->namapetugas,
    		'email' => $request->emailpetugas,
            'desa_id'=> $request->desa_id,
            'jeniskelamin'=> $request->jk,
            'status'=>1
        ]);

    	return redirect('/desadatapetugas');
    }

    public function delete($id)
    {
            $petugas = Petugas::find($id);
            $petugas->delete();
            return redirect('/desadatapetugas');
    }

    public function restore($id)
    { 
        $oke = Auth::user()->desa_id;
        $kelurahan = Desa::where('id', $oke)->get();
        $petugas = Petugas::onlyTrashed()->where('id',$id);
        $petugas->restore();
        return view('pagesdesa.desadatapetugas', compact('kelurahan','petugas'));
    }
}
