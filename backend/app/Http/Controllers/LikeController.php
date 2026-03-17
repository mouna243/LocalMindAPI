<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request){
        Like::create([
            "user_id"=> auth()->user()->id,
            "question_id" => $request->question_id
        ]);
        return redirect()->route("question.index");
    }

    public function unlike(Request $request){
        $like = Like::where("user_id", auth()->user()->id)->where("question_id", $request->question_id)->first();
        $like->delete();
        return redirect()->route("question.index");
    }
}
