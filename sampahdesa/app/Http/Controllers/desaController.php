<?php

namespace App\Http\Controllers;
use App\Desa;
use App\User;
use App\Kelurahan;
use App\Kecamatan;

use Illuminate\Http\Request;

class desaController extends Controller
{
    public function index(){
        $desa = Desa::onlyTrashed()->get();
        return view('content.datatrash', ['desa' => $desa,  ]);
    }

    public function datadesa(){
        $desa = Desa::all();
        $kelurahan = Kelurahan::all();
        $kecamatan = Kecamatan::all();
        return view('content.datadesa', compact('desa','kelurahan', 'kecamatan'));
    }
    
    public function store(Request $request){
        $this->validate($request,[
    		'namadesa' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'kecamatan' => 'required'
        ]);
        $desa = new \App\Desa;
        $desa->name = $request->namadesa;
        $desa->email = $request->email;
        $desa->password = bcrypt($request->password);
        $desa->kecamatan = $request->kecamatan;
        $desa->kabupaten = 'Tegal';
        $desa->status = 1;
        $desa->save();

        $id = $desa->id;
        User::create([
    		'name' => $request->namadesa,
    		'email' => $request->email,
            'password' => bcrypt($request->password),
            'desa_id'=>$id,
            //'api_token' => Str::random(60)
        ]);
 
    	return redirect('/datadesa');
    }

    public function addWisata(){
        return view('content.addWisata');
    }
    
    public function edit($id){
        $desa = Desa::find($id);
        $kelurahan = Kelurahan::all();
        $kecamatan = Kecamatan::all();
        return view('content.updatedesa', compact('desa','kelurahan', 'kecamatan'));
    }
    
    public function update(Request $request){
        $desa = new \App\Desa;
        $desa = Desa::where('id',$request->id)
        ->update([
    		'name' => $request->namadesa,
    		'email' => $request->email,
            //'password' => bcrypt($request->password),
            'kecamatan' => $request->kecamatan,
            'kabupaten' => 'Tegal',
            'status' => 1
        ]);
        $user = User::where('desa_id',$request->id)
        ->update([
    		'name' => $request->namadesa,
    		'email' => $request->email
            //'password' => bcrypt($request->password)
        ]);
        
        return redirect()->back();
    }

    public function hapus($id){
        $desa = Desa::where('id',$id)->first();
        Desa::where('id',$id)->delete();
        User::where('desa_id',$id)->delete();
 
    	return redirect('/datadesa');
    }
    public function restore($id){
    	$desa = Desa::onlyTrashed()->where('id',$id);
        Desa::where('id',$id)->restore();
        User::where('desa_id',$id)->restore();
    	return redirect('/datadesa');
    }
}
