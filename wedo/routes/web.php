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
Route::get('wedo_show','WedoController@show');
Route::get('wedo_delete/{id}','WedoController@destroy');
Route::get('wedo_create','WedoController@create');

Route::post('wedo_submit','WedoController@store');

Route::get('wedo_edit/{id}','WedoController@edit');

Route::post('wedo_update/{id}','WedoController@update');
