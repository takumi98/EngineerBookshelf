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
use App\Comment;
use App\User;
use EvaluationsTableSeeder;

class BookController extends Controller
{
    // トップページの表示
    public function showToppage(){
        $books = DB::table('books')->orderBy('updated_at', 'DESC')->limit(5)->get();
        // ddd($books);
        return view('book.top', ['books' => $books]);
    }

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
    public function showDetail(Request $request)
    {
        $n = $request;
        $books = DB::table('books')->find($n['book_id']);
        Log::debug('getメソッド');
        Log::debug($n);

        // リレーションの使い方がわからなかったため、直接クエリを投げて取得。
        $cid = $books->category_id;
        $eid = $books->evaluation_id;
        $user_id = $books->bookshelf_id;

        // 外部キーのデータを取得
        $categories = DB::table('categories')->find($cid);
        $evaluations = DB::table('evaluations')->where('code', $eid)->first();
        $user = DB::table('users')->find($user_id);

        // 必要なデータを配列に格納
        $category = $categories->name;
        $evaluation = $evaluations->content;
        $user_name = $user->name;
        $Rdata = array($category,$evaluation,$user_name);
        
        // コメントがない場合の例外処理
        try {
            $user_comment = User::find($n['book_id'])->comments;
        } catch (\Throwable $e) {
            $user_comment = null;
        }

        return view('book.detail', ['bookdata' => $books, 'Rdata' => $Rdata, 'comments' => $user_comment]);
    }

    public function exeComment(Request $request)
    {
        $comments = $request->all();
        // コメント登録に必要なデータ
        $commentData = ['user_id' => Auth::id(), 'book_id' => $comments['key'], 'comment' => $comments['comment']];
        
        \DB::beginTransaction();
        try{
            // 本を登録
            Comment::create($commentData);
            Log::debug('登録完了');
            \DB::commit();
        } catch(\Throwable $e){
            Log::debug('トランザクションエラー');
            Log::debug($e);
            \DB::rollback();
            abort(500);
        }
        return redirect()->route('detail',['book_id' => $comments['key'],]);
    }

    // 検索結果一覧ページ
    public function showSearch(Request $request)
    {
        $word = $request;
        $search_word = $word->search;
        if($search_word){
            $books = Book::where('name', 'like', '%' . $search_word . '%')->paginate(20);
            $book_count = Book::where('name', 'like', '%' . $search_word . '%')->count();
        } else{
            $books = DB::table('books')->orderBy('updated_at', 'DESC')->paginate(20);
            $book_count = DB::table('books')->count();
        }

        return view('book.search',['books' => $books, 'book_count' => $book_count]);
    }
}
