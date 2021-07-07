<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\sampleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Book;


class BookController extends Controller
{
    // トップページの表示
    public function showToppage(){
        $books = DB::table('books')->orderByRaw('updated_at ASC')->limit(5)->get();
        // ddd($books);
        return view('book.top', ['books' => $books]);
    }

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
        // どのボタンで送信したかを確認
        $key = $request->get('key');
        // 認証ユーザーid取得
        $id = Auth::id();
        $input = $request->all();
        $entryData = Arr::add($input, 'bookshelf_id', $id);
        Log::debug('使用データ');
        Log::debug($entryData);
        // $value =$request->all();
        if($key === 're'){
            // 本を登録せずに一覧画面に戻る
            $books = DB::table('books')->paginate(20);
            return view('book.entry_books', ['books' => $books]);
        }
        if($key === 'entry'){
            // 本を登録して、一覧画面に戻る
            // $request->fill($request->all())->save();
            Book::create($entryData);
            // \DB::table('books')->insert([
            //     'name' => 'リーダブルコード'
            // ]);
            // DBに値格納
            $books = DB::table('books')->paginate(20);
            return view('book.entry_books', ['books' => $books]);
        }
        if($key === 'continue'){
            // 本を登録して、もう一度登録画面に遷移
            $request->fill($request->all())->save();
            // 登録画面の表示
            $evaluations = DB::table('evaluations')->get();
            $categories = DB::table('categories')->get();
            return view('book.entry_books_form', ['evaluations' => $evaluations],['categories' => $categories]);
        }
    }
}
