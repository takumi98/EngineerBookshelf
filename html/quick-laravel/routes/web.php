<?php

//テストページ

use App\Http\Controllers\AuthController;

Route::get('/test', 'AuthController@test');

// ログイン前
Route::group(['middleware' => ['guest']], function () {
  // ログインフォーム表示
  Route::get('/', 'AuthController@showLogin')->name('showLogin');
  Route::get('/login', 'AuthController@showLogin')->name('showLogin');
  // ログイン処理
  Route::post('/login', 'AuthController@login')->name('login');
});

// ログイン後
Route::group(['middleware' => ['auth']], function() {
  // ホーム画面
  Route::get('home', function() {
    return view('home');
  })->name('home');
  // ログアウト
  Route::post('logout', 'AuthController@logout')->name('logout');
  // 登録技術書一覧
  Route::get('/entry_books', 'BookController@showEntryBooks')->name('ebooks');
  // 技術書登録画面
  Route::get('/entry_books_form', 'BookController@showEntryForm')->name('enform');
  
  Route::post('/entry_books', 'BookController@showEntryBooks')->name('ebooks');
});
