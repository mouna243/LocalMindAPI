<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/login', [App\Http\Controllers\API\AuthController::class,'Login']);
Route::post('/singin', [App\Http\Controllers\API\AuthController::class, 'singin']);
Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);


//Route::get('/questions', [App\Http\Controllers\API\QuestionController::class, 'index']);
Route::post('/questions', [App\Http\Controllers\API\QuestionController::class, 'store']);
Route::get('/questions/{question}/edit', [App\Http\Controllers\API\QuestionController::class, 'edit']);
Route::put('/questions/{question}', [App\Http\Controllers\API\QuestionController::class, 'update']);
Route::delete('/questions/{question}', [App\Http\Controllers\API\QuestionController::class, 'destroy']);


Route::post('/questions/comments', [App\Http\Controllers\API\CommentController::class, 'store']);
Route::put('/questions/comments/{comment}', [App\Http\Controllers\API\CommentController::class, 'update']);
Route::delete('/questions/comments/{comment}', [App\Http\Controllers\API\CommentController::class, 'destroy']);


Route::post('/questions/likes', [App\Http\Controllers\API\LikeController::class, 'like']);
Route::delete('/questions/likes', [App\Http\Controllers\API\LikeController::class, 'unlike']);
