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

Route::get('/test/nilai/{nilai}', function ($nilai) {
    echo \App\Helper\Nilai::keterangan($nilai);
});

Route::get('/detailtemplateperilakukerja/{id_templateperilakukerja}', 'DetailTemplatePerilakuKerjaController@index')->name('detailtemplateperilakukerja.index');
Route::get('/detailtemplateperilakukerja/{id_templateperilakukerja}/create', 'DetailTemplatePerilakuKerjaController@create')->name('detailtemplateperilakukerja.create');
Route::post('/detailtemplateperilakukerja/{id_templateperilakukerja}', 'DetailTemplatePerilakuKerjaController@store')->name('detailtemplateperilakukerja.store');
Route::get('/detailtemplateperilakukerja/{id_detailtemplateperilakukerja}/edit', 'DetailTemplatePerilakuKerjaController@edit')->name('detailtemplateperilakukerja.edit');
Route::put('/detailtemplateperilakukerja/{id_detailtemplateperilakukerja}', 'DetailTemplatePerilakuKerjaController@update')->name('detailtemplateperilakukerja.update');
Route::delete('/detailtemplateperilakukerja/{id_detailtemplateperilakukerja}', 'DetailTemplatePerilakuKerjaController@destroy')->name('detailtemplateperilakukerja.destroy');

Route::get('/detailtemplatetugaspokok/{id_templatetugaspokok}', 'DetailTemplatePerilakuKerjaController@index')->name('detailtemplatetugaspokok.index');
Route::get('/detailtemplatetugaspokok/{id_templatetugaspokok}/create', 'DetailTemplatePerilakuKerjaController@create')->name('detailtemplatetugaspokok.create');
Route::post('/detailtemplatetugaspokok/{id_templatetugaspokok}', 'DetailTemplatePerilakuKerjaController@store')->name('detailtemplatetugaspokok.store');
Route::get('/detailtemplatetugaspokok/{id_detailtemplatetugaspokok}/edit', 'DetailTemplatePerilakuKerjaController@edit')->name('detailtemplatetugaspokok.edit');
Route::put('/detailtemplatetugaspokok/{id_detailtemplatetugaspokok}', 'DetailTemplatePerilakuKerjaController@update')->name('detailtemplatetugaspokok.update');
Route::delete('/detailtemplatetugaspokok/{id_detailtemplatetugaspokok}', 'DetailTemplatePerilakuKerjaController@destroy')->name('detailtemplatetugaspokok.destroy');

Route::resources([
	'/jabatan' => 'JabatanController',
	'/unit' => 'UnitController',
	'/pangkat' => 'PangkatController',
	'/pegawai' => 'PegawaiController',
	'/satuanwaktu' => 'SatuanWaktuController',
	'/templateperilakukerja' => 'TemplatePerilakuKerjaController',
	'/templatetugaspokok' => 'TemplateTugasPokokController',

	'/harilibur' => 'HariLiburController',
]);