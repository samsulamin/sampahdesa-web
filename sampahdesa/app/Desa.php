<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desa extends Model
{
    //
    protected $table = "desa";
    protected $fillable = ['name','email','password','kecamatan','kabupaten','status'];

	use SoftDeletes;
    protected $dates = ['deleted_at'];
       
    public function users()
    {
    	return $this->hasOne('App\User');
    }

    public function petugas(){
    	return $this->hasMany('App\Petugas');
    }

    public function warga(){
    	return $this->hasMany('App\Warga');
    }

    public function notifikasi(){
    	return $this->hasMany('App\Notifikasi');
    }
}
