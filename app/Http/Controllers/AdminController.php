<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin',[
            'users'=>User::all(),
            'posts'=>Post::all()->load('user')->load('category'),
            'message'=>null,
            'post_count'=>count(Post::all()),
            'user_count'=>count(User::all())
        ]);
    }
    public function deleteUser($id){
        User::find($id)->delete();
        return redirect('admin')->with('message','Succesfully deleting an account');
    }
    public function deletePost($id){
        Post::find($id)->delete();
        return redirect('admin')->with('message','Succesfully deleting a post');
    }
}
