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
Route::get('/index','BlogController@index')->name('index');
Route::get('/list/{id}','BlogController@view')->name('view');
Route::get('/edit/{id}','BlogController@edit')->name('edit');
Route::post('/edit/{id}','BlogController@update')->name('update');
Route::get('delete/{id}','BlogController@delete')->name('delete');
Route::get('/create','BlogController@create')->name('create');
Route::post('/create','BlogController@store')->name('store');