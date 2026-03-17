<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return view('home');
//});

Route::post('/questions/likes', [App\Http\Controllers\LikeController::class, 'like'])->name('like');
Route::delete('/questions/likes', [App\Http\Controllers\LikeController::class, 'unlike'])->name('unlike');

Route::get ('/', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');
Route::get ('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');
Route::post ('/questions', [App\Http\Controllers\QuestionController::class, 'store'])->name('question.store')->middleware('role');
Route::get ('/questions/{question}/edit', [App\Http\Controllers\QuestionController::class, 'edit'])->name('question.edit');
Route::put ('/questions/{question}', [App\Http\Controllers\QuestionController::class, 'update'])->name('question.update');
Route::delete ('/questions/{question}', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('question.destroy');


Route::post('/questions/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
Route::put('/questions/comments/{comment}', [App\Http\Controllers\CommentController::class, 'update'])->name('comment.update');
Route::delete('/questions/comments/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comment.destroy');


Route::get('/Login', [App\Http\Controllers\AuthController::class,'LoginView'])->name('LoginView');
Route::post('/Login', [App\Http\Controllers\AuthController::class,'Login'])->name('Login');


Route::get('/singin', [App\Http\Controllers\AuthController::class,'SinginView'])->name('SinginView');
Route::post('/singin', [App\Http\Controllers\AuthController::class, 'singin'])->name('singin');

Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
