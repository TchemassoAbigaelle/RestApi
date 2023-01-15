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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('games', 'GameController');
Route::resource('games', 'App\Http\Controllers\GameController');
Route::get('/index', 'App\Http\Controllers\GameController@index')->name("index");
Route::get('/create', 'App\Http\Controllers\GameController@create')->name("create");
Route::post('/store', 'App\Http\Controllers\GameController@store')->name("store");
Route::get('/{id}/edit', 'App\Http\Controllers\GameController@edit')->name("edit");
Route::put('/{id}/update', 'App\Http\Controllers\GameController@update')->name("update");
Route::delete('/{id}/destroy', 'App\Http\Controllers\GameController@destroy')->name("destroy");