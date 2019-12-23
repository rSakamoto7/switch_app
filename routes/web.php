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

Route::get('/','SwitchController@index')->name('switches.index');
Route::post('/','SwitchController@result');
// Route::get('/result','SwitchController@getResult')->name('switches.result');
Route::get('/list','SwitchController@list')->name('switches.list');
