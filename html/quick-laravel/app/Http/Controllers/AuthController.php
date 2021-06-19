<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showLogin(){
        // $encryption = encrypt('root');
        // $decryption = decrypt('eyJpdiI6Ik5KazJXaDIxMEVDbFprRW9hZm9aRHc9PSIsInZhbHVlIjoiUVFIYWR3S3JhMCtreVhrRlZIR05KZz09IiwibWFjIjoiOGY3NTc0N2E1ZDMxODkyZjUzNjQ4NWU4M2E2YTc0Zjc3YTk5MWNkM2I1ODMxMzBmNThkNDUzZDc0YTBhZGQ0YiJ9');
        // ddd($decryption);
        return view('login.login_form');
    }

    public function login(LoginFormRequest $request) {
        // $email = $req->email;
        // $password = $req->password;
        // ddd($request->all());
        // ddd($email,$password);

        $credentials = $request->only('eamil', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('home')->with('login_success', 'ログイン成功しました!');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }
}
