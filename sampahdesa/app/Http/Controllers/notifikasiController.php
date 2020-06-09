<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifikasi;
use App\Warga;
use Illuminate\Support\Facades\Auth;

class notifikasiController extends Controller
{
    public function index(){
        $oke = Auth::user()->desa_id;
        $notifikasi = Notifikasi::where('desa_id', $oke)->where('status', '!=','Selesai')->get();
        //$warga = Warga::all();
        return view('pagesdesa.notif', compact('notifikasi'));
    }

    public function laporan(){
        $oke = Auth::user()->desa_id;
        $laporan = Notifikasi::where('desa_id', $oke)->get();
        //$warga = Warga::all();
        return view('pagesdesa.laporan', compact('laporan'));
    }

    public function test(){
        $id=Auth::user()->desa_id;
        //$warga = Warga::where('desa_id',$id);
        $warga = Warga::where('desa_id', $id)->first();
        return view('pagesdesa.test', compact('warga'));
        //print($warga->namawarga);
    }

    public function testore(Request $request){
        Notifikasi::create([
    		'warga_id' => $request->warga_id,
    		'desa_id' => $request->desa_id,
            'status'=>'Tunggu'
        ]);

    	return redirect('/desanotifikasi');
    }

    public function angkut(Request $request){
        Notifikasi::where('id',$request->id)
            ->update([
            'status'=>'Selesai'
        ]);
    	return redirect('/desanotifikasi');
    }

    public function pending(Request $request){
        Notifikasi::where('id',$request->id)
            ->update([
            'status'=>'Pending'
        ]);
    	return redirect('/desanotifikasi');
    }

    public function carilaporan(Request $request)
    {
        $id=Auth::user()->desa_id;
        $query = $request->get('search');
        $laporan = Notifikasi::where('created_at', 'LIKE', '%' . $query . '%')->where('desa_id', $id)->paginate();

        return view('pagesdesa.laporan', compact('laporan','query','id'));
    }

    public function carinotifikasi(Request $request)
    {
        $id=Auth::user()->desa_id;
        $query = $request->get('search');
        $notifikasi = Notifikasi::where('created_at', 'LIKE', '%' . $query . '%')
                    ->where('desa_id', $id)
                    ->where('status', '!=','Selesai')->paginate();

        return view('pagesdesa.notif', compact('notifikasi','query','id'));
    }
}
