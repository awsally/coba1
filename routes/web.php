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

// Route::get('/', function () {
//        return view('backend/kandidat/tabel_detail');

// });
// //Auth::routes();

Route::get('/', function () {
       return view('admin_backend');

});
Route::get('kandidat/semu', 'KandidatController@tabel_semu');
// nama method buat manggil
Route::get('kandidat/semu/detail', 'KandidatController@semudetail')->name('kandidat/semudetail');
Route::get('kandidat/sefa', 'KandidatController@tabel_sefa');
Route::get('kandidat/bemu', 'KandidatController@tabel_bemu');
Route::get('kandidat/bemfa', 'KandidatController@tabel_bemfa');
Route::get('kandidat/hmj', 'KandidatController@tabel_hmj');
Route::get('kandidat/hmps', 'KandidatController@tabel_hmps');
Route::get('mahasiswa', 'MahasiswaController@tabel');
Route::get('fakultas', 'FakultasController@tabel');
Route::get('jabatan', 'JabatanController@tabel');
Route::get('hasilvote', 'HasilvoteController@tabel');
Route::get('kandidat/hapus/{id}', 'KandidatController@tabel_hapus');
Route::get('mahasiswa/hapus/{id}', 'MahasiswaController@tabel_hapus');
Route::get('fakultas/hapus/{id}', 'FakultasController@tabel_hapus');
Route::get('jabatan/hapus/{id}', 'JabatanController@tabel_hapus');
Route::get('hasilvote/hapus/{id}', 'HasilvoteController@tabel_hapus');