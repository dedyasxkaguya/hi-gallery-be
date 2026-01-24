<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::middleware('auth:sanctum')->get('/user/account', [UserController::class, 'getUserdata']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/follows', [FollowController::class,'index']);
Route::get('user/follower/{id}', [UserController::class,'getFollower']);
Route::get('user/following/{id}', [UserController::class,'getFollowing']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/search/{slug}', [UserController::class, 'show']);
    Route::get('/user/{slug}/min', [UserController::class, 'showmin']);
    Route::get('/user/{slug}/all', [UserController::class, 'showAndPost']);
    Route::get('/user/account', [UserController::class, 'getUserData']);
    // post
    Route::post('/user/logout', [UserController::class, 'logout']);

    Route::post('/follow', [FollowController::class,'follows']);
    Route::post('/follow/check', [FollowController::class,'check']);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/lim', [PostController::class, 'indexLim']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/post/detail/{id}', [PostController::class, 'showDetail']);
Route::get('/post/like/{id}', [PostController::class, 'addlike']);
Route::get('/post/category/{category}', [PostController::class, 'showCategory']);
Route::get('/post/search/{name}', [PostController::class, 'search']);
Route::get('/post/trend/top', [PostController::class, 'trend']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comment/{comment}', [CommentController::class, 'show']);

Route::get('/likes', [LikeController::class, 'index']);
Route::get('/like/{like}', [LikeController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
// Route::get('/user/test', [UserController::class,'test']);

// post
Route::middleware('guest')->group(function () {
    Route::post('/user/register', [UserController::class, 'register']);
    Route::post('/user/login', [UserController::class, 'login']);
}
);

Route::post('/comment/add', [CommentController::class, 'store']);
