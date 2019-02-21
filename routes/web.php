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
    return view('template.template');
});

Route::resources([
	'/jabatan' => 'JabatanController',
	'/unit' => 'UnitController',
	'/pangkat' => 'PangkatController',
	'/pegawai' => 'PegawaiController',
	'/satuanwaktu' => 'SatuanWaktuController',
	// TEST
	'/harilibur' => 'HariLiburController',
	// TEST
]);