<?php
use App\Http\Controllers\AuthController;

// ログイン前
Route::group(['middleware' => ['guest']], function () {
  // ログインフォーム表示
  Route::get('/login', 'AuthController@showLogin')->name('showLogin');
  // ログイン処理
  Route::post('/login', 'AuthController@login')->name('login');

  // 書籍詳細ページ
  Route::get('/detail', 'BookController@showDetail')->name('detail');
  // コメント登録処理
  Route::post('/detaile', 'BookController@exeComment')->name('execomment');
  // トップページ
  Route::get('/', 'BookController@showToppage')->name('top');
  // 検索結果一覧ページ
  Route::get('/search', 'BookController@showSearch')->name('search');
});

// ログイン後
Route::group(['middleware' => ['auth']], function() {
  // ホーム画面
  Route::get('home', function() {
    return view('home');
  })->name('home');
  // トップページ
  Route::get('/', 'BookController@showToppage')->name('top');
  // ログアウト
  Route::post('logout', 'AuthController@logout')->name('logout');
  // 登録技術書一覧
  Route::get('/entry_books', 'BookController@showEntryBooks')->name('showebooks');
  // 技術書登録画面
  Route::get('/entry_books_form', 'BookController@showEntryForm')->name('enform');
  // 技術書登録処理
  Route::post('/entry_books', 'BookController@exeEntryForm')->name('ebooks');
  // 書籍詳細画面
  Route::get('/detaile', 'BookController@showDetail')->name('detail');
  // コメント登録処理
  Route::post('/detaile', 'BookController@exeComment')->name('execomment');
  // 検索結果一覧ページ
  Route::get('/search', 'BookController@showSearch')->name('search');
});
