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
use App\Categorie;
use App\Evaluation;
use EvaluationsTableSeeder;

class BookController extends Controller
{
    // 登録技術書一覧画面の表示
    public function showEntryBooks()
    {
        // 今回はユーザーが一人なので、Book=登録書籍
        // $entry_books = \DB::Book()->all();
        $books = DB::table('books')->paginate(20);
        // Log::debug('デバッグ');
        return view('book.entry_books', ['books' => $books]);
    }

    // 技術書登録画面の表示
    public function showEntryForm()
    {
        // 評価を取得
        $evaluations = DB::table('evaluations')->get();
        // カテゴリーを取得
        $categories = DB::table('categories')->get();
        // Log::debug('評価');
        // Log::debug($evaluations);
        // Log::debug('カテゴリー');
        // Log::debug($categories);

        return view('book.entry_books_form', ['evaluations' => $evaluations], ['categories' => $categories]);
    }

    //技術書登録の処理
    public function exeEntryForm(sampleRequest $request)
    {
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
        if ($key === 're') {
            // 本を登録せずに一覧画面に戻る
            $books = DB::table('books')->paginate(20);
            return view('book.entry_books', ['books' => $books]);
        }
        if ($key === 'entry') {
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
        if ($key === 'continue') {
            // 本を登録して、もう一度登録画面に遷移
            $request->fill($request->all())->save();
            // 登録画面の表示
            $evaluations = DB::table('evaluations')->get();
            $categories = DB::table('categories')->get();
            return view('book.entry_books_form', ['evaluations' => $evaluations], ['categories' => $categories]);
        }
    }

    // 書籍詳細画面の表示
    public function showDetaile(Request $request)
    {
        $n = $request;
        $book = DB::table('books')->find($n['id']);
        Log::debug('getメソッド');
        Log::debug($n);
        var_dump($book);
        // ddd($book->evaluation);

        // var_dump($book->categorie->name);
        // ddd($book->categorie->name);

        // リレーションの使い方がわからなかったため、直接クエリを投げて取得。
        $cid = $book->category_id;
        $eid = $book->evaluation_id;
        var_dump('デバッグ,id');
        var_dump($cid);
        $categories = DB::table('categories')->find($cid);
        $evaluations = DB::table('evaluations')->where('code', $eid)->first();
        var_dump($categories);
        var_dump($evaluations);
        $category = $categories->name;
        $evaluation = $evaluations->content;
        $Rdata = array($category,$evaluation);
        // var_dump('データ');
        // var_dump($category);
        // var_dump($evaluation);
        // var_dump($Rdata);
        // 引数を3つにするとエラーになる？使用？
        return view('book.detaile', ['bookdata' => $book], ['Rdata' => $Rdata]);
    }
}
