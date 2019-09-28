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

Route::get('/chat', 'ChatController@index');
Route::get('/messages', 'ChatController@getMessages')->name('chat.message');
Route::post('/message/store', 'ChatController@store')->name('chat.message.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
