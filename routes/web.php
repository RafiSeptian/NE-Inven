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
    return view('landing');
})->name('landing')->middleware('guest');

Route::get('/dashboard', function(){
	$properties = \App\Inventaris::orderBy('updated_at', 'desc')->get();
	return view('welcome',compact('properties'));
})->middleware('auth');

Route::group(['prefix'=>'auth'], function(){
	Route::get('login', 'AuthController@getLogin')->name('getlogin');
	Route::post('login', 'AuthController@postLogin')->name('postlogin');
	Route::get('logout', 'AuthController@logout')->name('logout');
});

Route::resource('pegawai', 'PegawaiController');
Route::get('datapegawai', 'PegawaiController@datatables')->name('pegawai.data');
Route::get('/pegawai/export/excel', 'PegawaiController@excel')->name('pegawai.excel');
Route::get('/pegawai/export/pdf', 'PegawaiController@pdf')->name('pegawai.pdf');

Route::resource('jenis', 'JenisController');
Route::get('datajenis', 'JenisController@datatables')->name('jenis.data');
Route::get('/jenis/export/excel', 'JenisController@excel')->name('jenis.excel');
Route::get('/jenis/export/pdf', 'JenisController@pdf')->name('jenis.pdf');

Route::resource('ruang', 'RuangController');
Route::get('dataruang', 'RuangController@datatables')->name('ruang.data');
Route::get('/ruang/export/excel', 'RuangController@excel')->name('ruang.excel');
Route::get('/ruang/export/pdf', 'RuangController@pdf')->name('ruang.pdf');

Route::resource('petugas', 'PetugasController');
Route::get('datapetugas', 'PetugasController@datatables')->name('petugas.data');
Route::get('/petugas/export/excel', 'PetugasController@excel')->name('petugas.excel');
Route::get('/petugas/export/pdf', 'PetugasController@pdf')->name('petugas.pdf');

Route::resource('peminjaman', 'PeminjamanController');
Route::get('datapeminjaman', 'PeminjamanController@datatables')->name('peminjaman.data');
Route::get('/peminjaman/export/excel', 'PeminjamanController@excel')->name('peminjaman.excel');
Route::get('/peminjaman/export/pdf', 'PeminjamanController@pdf')->name('peminjaman.pdf');

Route::resource('inventaris', 'InventarisController');
Route::get('datainventaris', 'InventarisController@datatables')->name('inventaris.data');
Route::get('/inventaris/export/excel', 'InventarisController@excel')->name('inven.excel');
Route::get('/inventaris/export/pdf', 'InventarisController@pdf')->name('inventaris.pdf');

Route::resource('level', 'LevelController');
Route::get('datalevel', 'LevelController@datatables')->name('level.data');
Route::get('/level/export/excel', 'LevelController@excel')->name('level.excel');
Route::get('/level/export/pdf', 'LevelController@pdf')->name('level.pdf');