<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\sampleRequest;

class BookController extends Controller
{
    // 登録技術書一覧画面の表示
    public function showEntryBooks(){
        // 今回はユーザーが一人なので、Book=登録書籍
        // $entry_books = \DB::Book()->all();
        $books = DB::table('books')->paginate(20);
        // Log::debug('デバッグ');
        return view('book.entry_books', ['books' => $books]);
    }

    // 技術書登録画面の表示
    public function showEntryForm(){
        // 評価を取得
        $evaluations = DB::table('evaluations')->get();
        // カテゴリーを取得
        $categories = DB::table('categories')->get();
        // Log::debug('評価');
        // Log::debug($evaluations);
        // Log::debug('カテゴリー');
        // Log::debug($categories);

        return view('book.entry_books_form', ['evaluations' => $evaluations],['categories' => $categories]);
    }

    //技術書登録の処理
    public function exeEntryForm(sampleRequest $request){
        Log::debug('<<<<<<<<<<<<');
        Log::debug('デバッグ');
        Log::debug('入力値');
        Log::debug($request);

        // 登録本の表示
        $books = DB::table('books')->paginate(20);
        return view('book.entry_books', ['books' => $books]);
    }
}
