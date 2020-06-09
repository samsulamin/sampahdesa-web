<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Petugas extends Model
{
    //
    use SoftDeletes;
 
    protected $table = "petugas";
    protected $fillable = ['namapetugas','email','password','desa_id','jeniskelamin','status'];
    protected $dates = ['deleted_at'];


    public function desa(){
    	return $this->belongsTo('App\Desa');
    }

}
