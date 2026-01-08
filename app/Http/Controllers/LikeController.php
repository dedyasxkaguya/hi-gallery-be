<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public static function index(){
        return response()->json(Like::latest()->get());
    }
    public static function show($id){
        return response()->json(Like::find($id)->load('post')->load('user'));
    }
}
