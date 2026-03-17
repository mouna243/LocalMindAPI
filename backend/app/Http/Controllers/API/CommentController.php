<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "description" => "required",
        ]);

        $comment = Comment::create([
            "content" => $request->description,
            "user_id" => auth()->user()->id,
            "question_id" => $request->question_id,
        ]);

        return response()->json([
            "message" => "Comment created successfully",
            "data" => compact('comment')
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            "description" => "required",
        ]);

        $comment->update([
            "content" => $request->description,
        ]);

        return response()->json([
            "message" => "Comment updated successfully",
            "data" => compact('comment')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json([
            "message" => "Comment deleted successfully",
        ]);
    }
}

