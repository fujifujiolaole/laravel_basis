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


// Route::get('/siswa', function () {
//     return "selamat datang....";
// });


// Route::get('/Guru', function () {
//      return "Selamat Datang Guru....";
// });

// Route::get('/Siswa/{id}', function ($id) {
//     return "Selamat Datang " .$id;
// });

// Route::get('/Karyawan/{parameter?}', function ($parameter=null){
//     return "Selamat Datang karyawan " .$parameter;
// });

// Route::get('/home', function (){
//      return View('home');
// });

// Route::get('/admin', function (){
//     return redirect('/home');
// });

Route::get ('/Pegawai', 'PegawaiController@index');
Route::get('/BigBoss', 'BigBossController@index');
Route::get ('/Karyawan', 'KaryawanController@index');
Route::get('/Siswa', 'SiswaController@index');
Route::get('/Guru','GuruController@index');


Route::get ('/Users', 'UsersController@index');
Route::get('/Barang', 'BarangController@index');
Route::get ('/Kategori', 'KategoriController@index');
Route::get('/Satuan', 'SatuanController@index');