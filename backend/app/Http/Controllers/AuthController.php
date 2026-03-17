<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginView(){
    return view("login");
    }

    public function Login(Request $request){

        $email = $request->email ;
        $password = $request->password ;
        $credentials = ["email"=> $email ,"password"=> $password ] ;
        if (Auth::attempt($credentials)) {
            return redirect()->route("question.index");
        }
        return redirect()->route("LoginView");

    }

    public function SinginView(Request $request){
    return view("singin");
    }

    public function Singin(Request $request){
        $name = $request->name;
        $email = $request->email ;
        $password = $request->password ;
        $credentials = ["name" => $name ,"email"=> $email ,"password"=> Hash::make($password) ,] ;
        User::create($credentials);
        return redirect()->route("LoginView");
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route("LoginView");
    }
}
