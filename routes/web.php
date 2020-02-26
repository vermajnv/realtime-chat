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
Route::prefix('/sitemaster')->group(function() {
    Route::get('/login', 'Master\Auth\LoginController@showloginform')->name('admin.login');
    Route::post('/login', 'Master\Auth\LoginController@login')->name('admin.login');
    Route::post('/logout', 'Master\Auth\LoginController@logout')->name('logout');
    // Route::post('forgot/password', 'Master\Auth\ForgotPasswordController')->name('forgot.password');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'Master\MasterController@index')->name('admin.dashboard');
        Route::resource('roles', 'Master\Access\RoleController');
        Route::get('roles/givepermission/{id}', 'Master\Access\RoleController@givePermission')->name('roles.givepermission');
        Route::post('roles/storepermission/{id}', 'Master\Access\RoleController@storePermission')->name('roles.permission.store');
        Route::resource('permissions', 'Master\Access\PermissionController');
    });
});
