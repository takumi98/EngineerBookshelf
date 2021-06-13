<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ログイン機能
     * 
     * @return view
     */
    
    public function showLogin(){
        return view('user.login');
    }
}
