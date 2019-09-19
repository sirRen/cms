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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posthome', 'PostController@index')->name('home');
Route::resource('posts', 'PostController');
Route::resource('users', 'UserHandleController');
Route::resource('permissions', 'PermissionController');
Route::resource('roles', 'RoleController');

Route::namespace('Admin')->prefix('admin')->group(function () {

    Route::get('/', 'IndexController@index')->name("main");
    Route::get('/default', 'IndexController@default')->name("main");
    Route::get('/minor', 'IndexController@minor')->name("minor");
    Route::get('/index1', 'IndexController@index1')->name("minor");
    Route::get('/index2', 'IndexController@index2')->name("minor");

    // 在 「App\Http\Controllers\Admin」 命名空间下的控制器
});
