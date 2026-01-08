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
}
