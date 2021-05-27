<?php

use App\Hasta;
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

/*hastalar*/
Route::get('/otomasyon/hastalar/create', 'HastaController@create');
Route::post('/otomasyon/hastalar', 'HastaController@store');
Route::get('/otomasyon/hastalar', 'HastaController@index')->name('hasta.index');
Route::get('/otomasyon/hastalar/{hasta}', 'HastaController@show')->name('hasta.show');
Route::get('/otomasyon/hastalar/{hasta}/edit', 'HastaController@edit');
Route::put('/otomasyon/hastalar/{hasta}', 'HastaController@update');
Route::get('/otomasyon/hastalar/{hasta}/delete', 'HastaController@destroy')->name('hasta.delete');
Route::get('/search/', 'HastaController@search')->name('hasta.search');

/*unvanlar*/
Route::get('/otomasyon/unvanlar/create', 'UnvanController@create');
Route::post('/otomasyon/unvanlar', 'UnvanController@store');
Route::get('/otomasyon/unvanlar', 'UnvanController@index')->name('unvan.index');
Route::get('/otomasyon/unvanlar/{unvan}', 'UnvanController@show')->name('unvan.show');
Route::get('/otomasyon/unvanlar/{unvan}/edit', 'UnvanController@edit');
Route::put('/otomasyon/unvanlar/{unvan}', 'UnvanController@update');
Route::get('/otomasyon/unvanlar/{unvan}/delete', 'UnvanController@destroy')->name('unvan.delete');
Route::get('/otomasyon/unvanlar/search/', 'UnvanController@search')->name('unvan.search');

/*doktorlar*/
Route::get('/otomasyon/doktorlar/create', 'DoktorController@create');
Route::post('/otomasyon/doktorlar', 'DoktorController@store');
Route::get('/otomasyon/doktorlar', 'DoktorController@index')->name('doktor.index');
Route::get('/otomasyon/doktorlar/{unvan}', 'DoktorController@show')->name('doktor.show');
Route::get('/otomasyon/doktorlar/{unvan}/edit', 'DoktorController@edit');
Route::put('/otomasyon/doktorlar/{unvan}', 'DoktorController@update');
Route::get('/otomasyon/doktorlar/{unvan}/delete', 'DoktorController@destroy')->name('doktor.delete');
Route::get('/otomasyon/doktorlar/search/', 'DoktorController@search')->name('doktor.search');

/*poliklinikler*/
Route::get('/otomasyon/poliklinikler/create', 'PoliklinikController@create');
Route::post('/otomasyon/poliklinikler', 'PoliklinikController@store');
Route::get('/otomasyon/poliklinikler', 'PoliklinikController@index')->name('poliklinik.index');
Route::get('/otomasyon/poliklinikler/{poliklinik}', 'PoliklinikController@show')->name('poliklinik.show');
Route::get('/otomasyon/poliklinikler/{poliklinik}/edit', 'PoliklinikController@edit');
Route::put('/otomasyon/poliklinikler/{poliklinik}', 'PoliklinikController@update');
Route::get('/otomasyon/poliklinikler/{poliklinik}/delete', 'PoliklinikController@destroy')->name('poliklinik.delete');
Route::get('/otomasyon/poliklinikler/search/', 'PoliklinikController@search')->name('poliklinik.search');

