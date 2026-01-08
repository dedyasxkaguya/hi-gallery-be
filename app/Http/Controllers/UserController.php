<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function index(){
        return response()->json(User::all());
    }
    public static function show($id){
        $data = User::find($id);
        if($data){
            return response()->json($data->load('post')->load('comment')->load('like'));
        }else{
            return response()->json('null blyat');
        }
    }
}
