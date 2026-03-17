<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function Login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $user = User::where("email" , $email)->first();

        if($user){
            if (Hash::check($password , $user->password)) {
                $token = $user->createToken('token')->plainTextToken;

                return response()->json([
                    "message" => "login successful",
                    "token" => $token

                ]);
            }
        }

        return response()->json([
            "message" => "login faild"
        ]);

    }



    public function Singin(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $credentials = ["name" => $name, "email" => $email, "password" => Hash::make($password)];

        $user = User::create($credentials);
        return response()->json([
            "message" => "user created successfully",
            "user"=> $user
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            "message" => "logout successful"
        ]);
    }
}
