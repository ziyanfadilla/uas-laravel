<?php

use App\Http\Controllers\BukuController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','BukuController@index')->name('buku.index');
Route::get('/kendaraan/create','BukuController@create')->name('buku.create');
Route::post('/kendaraan/store','BukuController@store')->name('buku.store');
Route::delete('/kendaraan/{id}','BukuController@destroy')->name('buku.destroy');
Route::get('/kendaraan/{id}/edit','BukuController@edit')->name('buku.edit');
Route::put('/kendaraan/{id}','BukuController@update')->name('buku.update');
Route::get('/cetak','BukuController@cetak')->name('buku.cetak');


Auth::routes();             

