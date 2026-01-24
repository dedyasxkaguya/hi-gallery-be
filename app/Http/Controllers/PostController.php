<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public static function index()
    {
        return response()->json(Post::latest()->with('user')->with('category')->get());
    }

    public static function show($slug)
    {
        return response()->json(Post::where('slug', $slug)->with('user')->with('category')->with('like')->with('comment.user')->first());
    }

    public static function showDetail($id)
    {
        return response()->json(Post::find($id)->load('user')->load('comment')->load('like'));
    }

    public static function indexlim()
    {
        return response()->json(Post::latest()->with('user')->with('category')->paginate(6));
    }

    public static function addlike($id)
    {
        $data = Post::find($id);
        $data->likeCount += 1;
        $data->push();

        return response()->json($data->likeCount);
    }

    public static function showCategory($category)
    {
        return response()->json(Post::where('category_id', $category)->get()->load('category'));
    }

    public static function search($name)
    {
        return response()->json(Post::where('title', 'LIKE', "%$name%")
            ->orWhere('caption', 'LIKE', "%$name%")->get()
            ->load('category')->load('user'));
    }

    public static function trend()
    {
        return response()->json(Post::all()->load('user')->load('category')->sortBy('likeCount',SORT_REGULAR,true)->values()->all());
    }
}
