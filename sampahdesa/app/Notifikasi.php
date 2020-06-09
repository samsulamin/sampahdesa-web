<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    //use SoftDeletes;
 
    protected $table = "notifikasi";
    protected $fillable = ['warga_id', 'desa_id', 'status'];
    protected $dates = ['deleted_at'];

    public function warga(){
    	return $this->belongsTo('App\Warga');
    }
    public function desa(){
    	return $this->belongsTo('App\Desa');
    }
}
