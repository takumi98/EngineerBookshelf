<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin(){
        return view('login.login_form');
    }

    public function login(Request $req) {
        // $email = $req->email;
        // $password = $req->password;

        // ddd($email,$password);
    }
}
