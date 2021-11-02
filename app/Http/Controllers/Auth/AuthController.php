<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin(){
        return view('login.login_form');
    }
    // @param App\Httt\Request\LoginFormRequestを$requestという変数に入れている

    public function login(LoginFormRequest $request){
        dd($request->all());
    }

}
