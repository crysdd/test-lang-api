<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LangController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/langs', 'LangController@getLangsList')->name('langs');
Route::get('/texts', 'LangController@getAllTexts')->name('all_texts');
Route::get('/texts/{lang}', 'LangController@getLangText')->name('texts_lang');
Route::post('/add/key', 'LangController@addKey')->name('add_key');
Route::post('/text', 'LangController@addChangeText')->name('text');
