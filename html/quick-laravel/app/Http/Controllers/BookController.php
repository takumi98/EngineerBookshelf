<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // 登録技術書一覧画面の表示
    public function showEntryBooks(){
        return view('book.entry_books');
    }
}
