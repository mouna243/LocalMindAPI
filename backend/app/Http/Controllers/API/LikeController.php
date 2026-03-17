<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Like;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        Like::create([
            "user_id" => auth()->user()->id,
            "question_id" => $request->question_id
        ]);
        return response()->json([
            "message" => " bien liker "
        ]);
    }

    public function unlike(Request $request)
    {
        $like = Like::where("user_id", auth()->user()->id)->where("question_id", $request->question_id)->first();
        $like->delete();
        return response()->json([
            "message" => " unliker "
        ]);
    }
}
