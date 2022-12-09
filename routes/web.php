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

Route::get('/kontak', function () {
    return view('frontend.kontak');
});

Route::get('/gambar', function () {
    return view('frontend.gambar');
});

Route::get('/','ControllerVivo@fvivo');
Route::get('/cari_fvivo','ControllerVivo@carifvivo');
Route::get('/vivo','ControllerVivo@index')->middleware('auth');
Route::get('/cari_vivo','ControllerVivo@carivivo')->middleware('auth');
Route::delete('/vivo/{vivo}','ControllerVivo@destroy')->middleware('auth');
Route::get('/tambahvivo','ControllerVivo@create')->middleware('auth');
Route::post('/prosestambahvivo','ControllerVivo@store')->middleware('auth');
Route::get('/lihatvivo/{vivo}','ControllerVivo@show')->middleware('auth');
Route::get('/edit_vivo/{vivo}','ControllerVivo@edit')->middleware('auth');
Route::patch('/proseseditvivo/{vivo}','ControllerVivo@update')->middleware('auth');

Route::get('/fapple','ControllerApple@fapple');
Route::get('/apple','ControllerApple@index')->middleware('auth');
Route::delete('/apple/{apple}','ControllerApple@destroy')->middleware('auth');
Route::get('/tambahapple','ControllerApple@create')->middleware('auth');
Route::post('/prosestambahapple','ControllerApple@store')->middleware('auth');
Route::get('/lihatapple/{apple}','ControllerApple@show')->middleware('auth');
Route::get('/edit_apple/{apple}','ControllerApple@edit')->middleware('auth');
Route::patch('/proseseditapple/{apple}','ControllerApple@update')->middleware('auth');
Route::get('/cari_apple','ControllerApple@cariapple')->middleware('auth');

Route::get('/fsamsung','ControllerSamsung@fsamsung');
Route::get('/samsung','ControllerSamsung@index')->middleware('auth');
Route::delete('/samsung/{samsung}','ControllerSamsung@destroy')->middleware('auth');
Route::get('/tambahsamsung','ControllerSamsung@create')->middleware('auth');
Route::post('/prosestambahsamsung','ControllerSamsung@store')->middleware('auth');
Route::get('/lihatsamsung/{samsung}','ControllerSamsung@show')->middleware('auth');
Route::get('/edit_samsung/{samsung}','ControllerSamsung@edit')->middleware('auth');
Route::patch('/proseseditsamsung/{samsung}','ControllerSamsung@update')->middleware('auth');
Route::get('/cari_samsung','ControllerSamsung@carisamsung')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
