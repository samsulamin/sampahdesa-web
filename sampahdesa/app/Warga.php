<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Warga extends Model
{
    use SoftDeletes;
 
    protected $table = "warga";
    protected $fillable = ['namawarga','email','password','desa_id','rt','rw', 'jeniskelamin', 'latittude', 'longitude'];
    protected $dates = ['deleted_at'];

    public function notifikasi(){
    	return $this->hasMany('App\Notifikasi');
    }

    public function desa(){
    	return $this->belongsTo('App\Desa');
    }

}
