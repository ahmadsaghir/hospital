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

Route::get('/', 'Controller@home');
Route::get('/hakkimizda', 'Controller@hakkimizda');
Route::get('/iletisim', 'Controller@iletisim');
Route::get('/otomasyon', 'Controller@otomasyon');

/*randevu*/
Route::get('/otomasyon/randevular/create', 'RandevuController@create');
Route::post('/otomasyon/randevular', 'RandevuController@store');
Route::get('/otomasyon/randevular', 'RandevuController@index')->name('randevu.index');
Route::get('/otomasyon/randevular/{randevu}', 'RandevuController@show')->name('randevu.show');
Route::get('/otomasyon/randevular/{randevu}/edit', 'RandevuController@edit');
Route::put('/otomasyon/randevular/{randevu}', 'RandevuController@update');
Route::get('/otomasyon/randevular/{randevu}/delete', 'RandevuController@destroy')->name('randevu.delete');
Route::get('/randevular/search/', 'RandevuController@search')->name('randevu.search');

/*hastalar*/
Route::get('/otomasyon/hastalar/create', 'HastaController@create');
Route::post('/otomasyon/hastalar', 'HastaController@store');
Route::get('/otomasyon/hastalar', 'HastaController@index')->name('hasta.index');
Route::get('/otomasyon/hastalar/{hasta}', 'HastaController@show')->name('hasta.show');
Route::get('/otomasyon/hastalar/{hasta}/edit', 'HastaController@edit');
Route::put('/otomasyon/hastalar/{hasta}', 'HastaController@update');
Route::get('/otomasyon/hastalar/{hasta}/delete', 'HastaController@destroy')->name('hasta.delete');
Route::get('/hastalar/search/', 'HastaController@search')->name('hasta.search');

/*unvanlar*/
Route::get('/otomasyon/unvanlar/create', 'UnvanController@create');
Route::post('/otomasyon/unvanlar', 'UnvanController@store');
Route::get('/otomasyon/unvanlar', 'UnvanController@index')->name('unvan.index');
Route::get('/otomasyon/unvanlar/{unvan}', 'UnvanController@show')->name('unvan.show');
Route::get('/otomasyon/unvanlar/{unvan}/edit', 'UnvanController@edit');
Route::put('/otomasyon/unvanlar/{unvan}', 'UnvanController@update');
Route::get('/otomasyon/unvanlar/{unvan}/delete', 'UnvanController@destroy')->name('unvan.delete');
Route::get('/unvanlar/search/', 'UnvanController@search')->name('unvan.search');

/*doktorlar*/
Route::get('/otomasyon/doktorlar/create', 'DoktorController@create');
Route::post('/otomasyon/doktorlar', 'DoktorController@store');
Route::get('/otomasyon/doktorlar', 'DoktorController@index')->name('doktor.index');
Route::get('/otomasyon/doktorlar/{doktor}', 'DoktorController@show')->name('doktor.show');
Route::get('/otomasyon/doktorlar/{doktor}/edit', 'DoktorController@edit');
Route::put('/otomasyon/doktorlar/{doktor}', 'DoktorController@update');
Route::get('/otomasyon/doktorlar/{doktor}/delete', 'DoktorController@destroy')->name('doktor.delete');
Route::get('/doktorlar/search/', 'DoktorController@search')->name('doktor.search');

/*poliklinikler*/
Route::get('/otomasyon/poliklinikler/create', 'PoliklinikController@create');
Route::post('/otomasyon/poliklinikler', 'PoliklinikController@store');
Route::get('/otomasyon/poliklinikler', 'PoliklinikController@index')->name('poliklinik.index');
Route::get('/otomasyon/poliklinikler/{poliklinik}', 'PoliklinikController@show')->name('poliklinik.show');
Route::get('/otomasyon/poliklinikler/{poliklinik}/edit', 'PoliklinikController@edit');
Route::put('/otomasyon/poliklinikler/{poliklinik}', 'PoliklinikController@update');
Route::get('/otomasyon/poliklinikler/{poliklinik}/delete', 'PoliklinikController@destroy')->name('poliklinik.delete');
Route::get('/poliklinikler/search/', 'PoliklinikController@search')->name('poliklinik.search');

/*viziteler*/
Route::get('/otomasyon/viziteler/create', 'ViziteController@create');
Route::post('/otomasyon/viziteler', 'ViziteController@store');
Route::get('/otomasyon/viziteler', 'ViziteController@index')->name('vizite.index');
Route::get('/otomasyon/viziteler/{vizite}', 'ViziteController@show')->name('vizite.show');
Route::get('/otomasyon/viziteler/{vizite}/edit', 'ViziteController@edit');
Route::put('/otomasyon/viziteler/{vizite}', 'ViziteController@update');
Route::get('/otomasyon/viziteler/{vizite}/delete', 'ViziteController@destroy')->name('vizite.delete');
Route::get('/viziteler/search/', 'ViziteController@search')->name('vizite.search');

/*kurumlar*/
Route::get('/otomasyon/kurumlar/create', 'KurumController@create');
Route::post('/otomasyon/kurumlar', 'KurumController@store');
Route::get('/otomasyon/kurumlar', 'KurumController@index')->name('kurum.index');
Route::get('/otomasyon/kurumlar/{kurum}', 'KurumController@show')->name('kurum.show');
Route::get('/otomasyon/kurumlar/{kurum}/edit', 'KurumController@edit');
Route::put('/otomasyon/kurumlar/{kurum}', 'KurumController@update');
Route::get('/otomasyon/kurumlar/{kurum}/delete', 'KurumController@destroy')->name('kurum.delete');
Route::get('/kurumlar/search/', 'KurumController@search')->name('kurum.search');

/*hastaTipleri*/
Route::get('/otomasyon/hastaTipleri/create', 'HastaTipiController@create');
Route::post('/otomasyon/hastaTipleri', 'HastaTipiController@store');
Route::get('/otomasyon/hastaTipleri', 'HastaTipiController@index')->name('hastaTipi.index');
Route::get('/otomasyon/hastaTipleri/{hastaTipi}', 'HastaTipiController@show')->name('hastaTipi.show');
Route::get('/otomasyon/hastaTipleri/{hastaTipi}/edit', 'HastaTipiController@edit');
Route::put('/otomasyon/hastaTipleri/{hastaTipi}', 'HastaTipiController@update');
Route::get('/otomasyon/hastaTipleri/{hastaTipi}/delete', 'HastaTipiController@destroy')->name('hastaTipi.delete');
Route::get('/hastaTipleri/search/', 'HastaTipiController@search')->name('hastaTipi.search');

/*oncelikler*/
Route::get('/otomasyon/oncelikler/create', 'OncelikController@create');
Route::post('/otomasyon/oncelikler', 'OncelikController@store');
Route::get('/otomasyon/oncelikler', 'OncelikController@index')->name('oncelik.index');
Route::get('/otomasyon/oncelikler/{oncelik}', 'OncelikController@show')->name('oncelik.show');
Route::get('/otomasyon/oncelikler/{oncelik}/edit', 'OncelikController@edit');
Route::put('/otomasyon/oncelikler/{oncelik}', 'OncelikController@update');
Route::get('/otomasyon/oncelikler/{oncelik}/delete', 'OncelikController@destroy')->name('oncelik.delete');
Route::get('/oncelikler/search/', 'OncelikController@search')->name('oncelik.search');
