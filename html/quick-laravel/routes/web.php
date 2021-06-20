<?php

//テストページ
Route::get('/test', 'AuthController@test');

// ログイン前
Route::group(['middleware' => ['guest']], function () {
  // ログインフォーム表示
  Route::get('/', 'AuthController@showLogin')->name('showLogin');
  // ログイン処理
  Route::post('/login', 'AuthController@login')->name('login');
});

// ログイン後
Route::group(['middleware' => ['auth']], function() {
  // ホーム画面
  Route::get('home', function() {
    return view('home');
  })->name('home');
});
// // ログインページ
// Route::get('/', 'AuthController@showLogin')->name('showLogin');

// // ログインページリダイレクト
// Route::post('/login', 'AuthController@login')->name('login');

