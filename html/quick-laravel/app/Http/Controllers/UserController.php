<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ログインページを表示
     * 
     * @return view
     */
    
    public function showLogin(){
        return view('user.login');
    }

    public function test(){
        return view('header');
    }
}
