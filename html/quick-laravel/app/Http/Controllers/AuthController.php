<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

    // ログイン認証、バリデーション
    public function login(LoginFormRequest $request) {

        $credentials = $request->only('email', 'password');
        // ddd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Log::debug('<<<<<<<<<<<<<<<<<<<<<');
            Log::debug('ログイン成功');
            Log::debug('ユーザー情報');
            Log::debug($request);

            return redirect()->route('home')->with('login_success', 'ログイン成功しました!');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています',
            Log::debug('ログイン失敗')
        ]);
    }

    // ログアウト
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Log::debug('<<<<<<<<<<<<<<<<<<<<<');
        Log::debug('ログアウト');
        Log::debug($request);

        return redirect()->route('showLogin')->with('logout', 'ログアウトしました!');
    }
}
