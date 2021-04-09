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


Route::get('/about-me', function () {
    return view('about-me');
});


Route::get('/kontak', 'KontakController@aaaa');


Route::get('/jurusan', 'JurusanController@jurusan');

Auth::routes();



Route::get('/home', 'HomeController@index');

Route::get('/daftar-siswa', 'SiswaController@daftarsiswa')->name('daftar.siswa');
Route::get('/edit-siswa/{id}', 'SiswaController@edit')->name('edit.siswa');

Route::put('/edit-siswa/{id}', 'SiswaController@update');
Route::delete('/delete-siswa/{id}', 'SiswaController@delete')->name('delete.siswa');

Route::get('/tambah-siswa', 'SiswaController@tambahsiswa')->name('create.siswa');
Route::post('/tambah-siswa', 'SiswaController@savesiswa');

Route::get('/upload','UploadController@proses_upload')->name('upload.siswa');
Route::post('/upload/proses','UploadController@proses_upload');