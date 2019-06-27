<?php

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/aslab', function () {
	$nilai=DB::table('nilai')->get();
	$jurusan=DB::table('jurusan')->get();
	$alasan=DB::table('alasan')->get();
    return view('daftaraslab')->with('nilai',$nilai)->with('jurusan',$jurusan)->with('alasan',$alasan);
});


Route::post('/daftar', 'Pemro@daftar');
Route::post('/login', 'Pemro@login');
Route::post('/daftaraslab', 'Pemro@daftaraslab');

Route::get('/logout','Pemro@logout');

