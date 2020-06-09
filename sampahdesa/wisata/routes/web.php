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
//wisata
Route::get('/dataWisata','adminWisataController@dataWisata');
Route::get('/addWisata','adminWisataController@addWisata');
Route::get('/datawisata/edit','adminWisataController@update');


Route::get('/dataWisatawan','adminWisatawanController@dataWisatawan');
Route::get('/addWisatawan','adminWisatawanController@addWisatawan');
Route::get('/dashboard','adminWisataController@index');
Route::get('/about','adminWisatawanController@about');
Route::get('/contact','adminWisatawanController@contact');
