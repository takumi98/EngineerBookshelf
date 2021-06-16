<?php

// ログインページ
Route::get('/', 'AuthController@showLogin')->name('showLogin');

// ログインページリダイレクト
Route::post('/login', 'AuthController@login')->name('login');
