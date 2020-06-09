<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/baru','adminWisataController@index');

//---//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
    Route::resource('/','adminWisataController');
});
//admin super
Route::get('/datadesa','desaController@datadesa');
Route::get('/datadesa/trash','desaController@index');
Route::post('/datadesa/store','desaController@store');
Route::get('/datadesa/edit/{id}','desaController@edit');
Route::post('/datadesa/update/{id}', 'desaController@update');
Route::get('/delete/{id}', 'desaController@hapus');
Route::get('/datadesa/restore/{id}', 'desaController@restore');

Route::get('/datapetugas','petugasController@datapetugas');
Route::get('/datawarga','wargaController@datawarga');
Route::get('/about','wargaController@about');
Route::get('/laporan','wargaController@laporan');
Route::get('/laporan/cari','wargaController@cari');
Route::get('/notifikasi','wargaController@notifikasi');

//admin desa
Route::get('/desadatapetugas','desaAdminController@index');
Route::post('/desapetugas/store','desaAdminController@store');
Route::get('/desapetugas/edit/{id}','desaAdminController@edit');
Route::post('/desapetugas/update/{id}','desaAdminController@update');
Route::get('/desapetugas/delete/{id}','desaAdminController@delete');
Route::get('desapetugas/trash','desaAdminController@trash');
Route::get('/desapetugas/restore/{id}','desaAdminController@restore');


Route::get('/desadatawarga','desaWargaController@index');
Route::post('/desadatawarga/store','desaWargaController@store');
Route::get('/desawarga/edit/{id}','desaWargaController@edit');
Route::post('/desawarga/update/{id}','desaWargaController@update');
Route::get('/desawarga/delete/{id}','desaWargaController@delete');
Route::get('/desawarga/trash','desaWargaController@trash');
Route::get('/desawarga/store/{id}','desaWargaController@restore');

Route::get('/desanotifikasi','notifikasiController@index');
Route::get('/desanotifikasi/cari','notifikasiController@carinotifikasi');
Route::get('/desalaporan','notifikasiController@laporan');
Route::get('/desalaporan/cari','notifikasiController@carilaporan');
Route::get('/desaabout','notifikasiController@test');
Route::post('/test/store','notifikasiController@testore');
//
Route::post('/notif/angkut/{id}','notifikasiController@angkut');
Route::post('/notif/pending/{id}','notifikasiController@pending');
