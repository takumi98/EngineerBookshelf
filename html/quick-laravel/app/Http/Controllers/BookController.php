<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    // 登録技術書一覧画面の表示
    public function showEntryBooks(){
        // 今回はユーザーが一人なので、Book=登録書籍
        // $entry_books = \DB::Book()->all();
        $books = DB::table('books')->paginate(20);
        Log::debug('>>>>>デバッグ<<<<<');
        Log::debug($books);
        return view('book.entry_books', ['books' => $books]);
    }
}
