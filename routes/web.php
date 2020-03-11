<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/runSystemFunc', 'ActionController@runSystemFunc');
Route::get('/runAdminFunc', 'ActionController@runAdminFunc');

// 全ユーザ
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    Route::get('/user', function () {
        return 'visited page';
    });
});

// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('/admin', function () {
        return 'visited page';
    });
});

// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {
    Route::get('/system', function () {
        return 'visited page';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
