<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public static function index(){
        return response()->json(Like::latest()->get());
    }
    public static function show($id){
        return response()->json(Like::find($id)->load('post')->load('user'));
    }
    // public function check($id){
    //     $data = Like::find($id);
    //     $user = Auth::user();
    //     return response()->json(['data'=>$data->user(),'user'=>$user]);
    // }
}
