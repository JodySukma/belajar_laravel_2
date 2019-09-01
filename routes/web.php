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
    return view('welcome');
});

// Route SCRUD
Route::get('/anggota', 'AnggotaController@index');
Route::get('/anggota/tambah', 'AnggotaController@tambah');
Route::post('/anggota/store', 'AnggotaController@store');
Route::get('/anggota/edit/{id}', 'AnggotaController@edit');
Route::post('/anggota/update', 'AnggotaController@update');
Route::get('/anggota/hapus/{id}', 'AnggotaController@hapus');
Route::get('/anggota/cari', 'AnggotaController@cari');

//Route Validate
Route::get('/input', 'ValidateController@input');
Route::post('/proses', 'ValidateController@proses');

// Route Eloquent Laravel
Route::get('/', function (){
    return view('welcome');
});
Route::get('/pegawai', 'PegawaiController@index');

// Route CRUD Eloquen Laravel
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');

// Route Soft Deletes
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');
Route::get('/mahasiswa/trash', 'MahasiswaController@trash');
Route::get('mahasiswa/kembalikan/{id}', 'MahasiswaController@kembalikan');
Route::get('mahasiswa/kembalikan_semua', 'MahasiswaController@kembalikan_semua');
Route::get('mahasiswa/hapus_permanen/{id}', 'MahasiswaController@hapus_permanen');
Route::get('/mahasiswa/hapus_permanen_semua', 'MahasiswaController@hapus_permanen_semua');

Auth::routes();


// Route Auth with policies or gate
Route::get('service/post/gate', 'PostController@gate');
Route::get('service/post/view', 'PostController@view');
Route::get('service/post/create', 'PostController@create');
Route::get('service/post/update', 'PostController@update');
Route::get('service/post/delete', 'PostController@delete');

Route::get('/home', 'HomeController@index')->name('home');
