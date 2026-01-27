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

Route::get('/users', [UserController::class, 'index']);
Route::get('/follows', [FollowController::class, 'index']);
Route::get('/user/{name}/all', [UserController::class, 'showAndPost']);
Route::get('user/follows/{id}', [UserController::class, 'getFollows']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/find/{slug}', [UserController::class, 'show']);
    Route::get('/user/{slug}/min', [UserController::class, 'showmin']);
    Route::get('/user/account', [UserController::class, 'getUserData']);
    Route::get('/user/account/full', [UserController::class, 'getUserDataAll']);
    Route::get('/user/follow', [UserController::class, 'getAccountFollow']);

    Route::get('/post/like/{id}', [PostController::class,'checkLike']);
    Route::get('/post/like/{id}/check', [PostController::class,'checkOnly']);

    // post

    Route::post('/user/logout', [UserController::class, 'logout']);

    Route::post('/follow', [FollowController::class, 'follows']);
    Route::post('/follow/check', [FollowController::class, 'check']);

    Route::post('/post/add', [PostController::class,'store']);
});

Route::get('/user/search/{name}', [UserController::class, 'searchUser']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/lim', [PostController::class, 'indexLim']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/post/detail/{id}', [PostController::class, 'showDetail']);
// Route::get('/post/like/{id}', [PostController::class, 'addlike']);
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
