<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class,'index']);
Route::get('/user/{id}', [UserController::class,'show']);

Route::get('/posts', [PostController::class,'index']);
Route::get('/post/{slug}', [PostController::class,'show']);
Route::get('/post/detail/{id}', [PostController::class,'showDetail']);

Route::get('/comments', [CommentController::class,'index']);
Route::get('/comment/{comment}', [CommentController::class,'show']);

Route::get('/likes', [LikeController::class,'index']);
Route::get('/like/{like}', [LikeController::class,'show']);