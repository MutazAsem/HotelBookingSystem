<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){

        return view('login');
    }

    public function check_user (Request $request){
        $isLogged=Auth::attempt(['email'=>$request->user_email,'password'=>$request->user_password]);
        if($isLogged)
        return redirect()->route('home');
        return redirect()->back()->with(['message'=>'incorecr username or password']);
    }

    public function logout (){
        Auth::logout();
        return redirect()->route('login');
    }

}
