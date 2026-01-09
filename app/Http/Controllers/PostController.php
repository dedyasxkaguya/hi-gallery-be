<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function index(){
        return response()->json(Post::latest()->with('user')->get());
    }
    public static function show($slug){
        return response()->json(Post::where('slug',$slug)->with('user')->with('comment.user')->with('like')->first());

    }
    public static function showDetail($id){
        return response()->json(Post::find($id)->load('user')->load('comment')->load('like'));
    }
}
