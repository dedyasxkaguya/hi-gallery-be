<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function index(){
        return response()->json(Post::latest()->with('user')->get());
    }
    public static function show(Post $post){
        return response()->json($post->with('user')->with('comment.user')->with('like')->first());

    }
    public static function showDetail($id){
        return response()->json(Post::find($id)->load('user')->load('comment')->load('like'));
    }
}
