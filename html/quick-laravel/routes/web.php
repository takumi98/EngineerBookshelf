<?php

//テストページ
Route::get('/test', 'AuthController@test');

// ログインページ
Route::get('/', 'AuthController@showLogin')->name('showLogin');

// ログインページリダイレクト
Route::post('/login', 'AuthController@login')->name('login');
