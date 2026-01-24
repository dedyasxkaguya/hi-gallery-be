<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public static function index(){
        return response()->json(Comment::all()->load('user'));
    }
    public static function show(Comment $comment){
        return response()->json($comment->load('user')->load('post'));
    }
    public static function store(Request $request){
        $data = new Comment();
        $data->user_id = $request->user_id;
        $data->post_id = $request->post_id;
        $data->comment = $request->comment;

        $data->save();
        return response()->json(['status'=>true,'data'=>$data]);
    }
}
