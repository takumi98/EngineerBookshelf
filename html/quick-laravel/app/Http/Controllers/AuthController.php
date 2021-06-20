<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    // テストコントローラ
    public function test() {
        // DBの中にデータがあるか確認
        // $this->assertDatabaseHas('users', [
        //     'email' => '98@example.co.jp',
        // ]);

        // 暗号化テスト
        // $encryption = encrypt('root');
        // $decryption = decrypt('eyJpdiI6Ik5KazJXaDIxMEVDbFprRW9hZm9aRHc9PSIsInZhbHVlIjoiUVFIYWR3S3JhMCtreVhrRlZIR05KZz09IiwibWFjIjoiOGY3NTc0N2E1ZDMxODkyZjUzNjQ4NWU4M2E2YTc0Zjc3YTk5MWNkM2I1ODMxMzBmNThkNDUzZDc0YTBhZGQ0YiJ9');
        // ddd($decryption);
    }
    // ログイン画面の表示
    public function showLogin(){
        return view('login.login_form');
    }

    public function login(Request $req) {
        // $email = $req->email;
        // $password = $req->password;

        // ddd($email,$password);
    }
}
