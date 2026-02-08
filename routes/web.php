<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminController::class, 'index']);
Route::delete('/admin/delete/user/{id}', [AdminController::class, 'deleteUser']);
Route::delete('/admin/delete/post/{id}', [AdminController::class, 'deletePost']);