<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with(['user', 'comments.user'])->withCount('likes')->get();
        return view("Question", [
            "questions"=> $questions
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
        ]);

        $question = Question::create([
            "title" => $request->title,
            "content" => $request->description,
            "user_id" => $request->user()->id,
        ]);

        return response()->json([
            "message" => " question created ",
            "question" => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
        ]);

        $question->update([
            "title" => $request->title,
            "content" => $request->description,
        ]);

          return response()->json([
            "message" => "question updated successfully",
            "data" => compact('question')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
            return response()->json([
            "message" => "Question deleted successfully"
        ]);;
    }
}

