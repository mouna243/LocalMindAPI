<?php

namespace App\Http\Controllers;

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

        Comment::create([
            "content" => $request->description,
            "user_id" => auth()->user()->id,
            "question_id" => $request->question_id,
        ]);

        return redirect()->route("question.index");
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

        return redirect()->route("question.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route("question.index");
    }
}
