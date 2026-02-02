<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NotificationController extends Controller
{
    public function index(){
        return response()->json(Notification::latest()->with('User')->get());
        // return response()->json('hmmm');
    }
    public function show($id){
        return response()->json(Notification::find($id)->latest()->with('user')->get());
    }
    public function store(Request $request){
        $data = new Notification();
        $data->user_id = $request->user_id;
        $data->type = $request->type;
        $data->post_id = $request->post_id;
        $data->from = Auth::user();
        $data->body = $request->body;
        $data->comment = $request->comment;
        $data->save();
        return response()->json([
            'status'=>true,
            'data'=>$data
        ]);
    }
}
