<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index()
    {
        return response()->json(Follow::all());
    }

    public function check(Request $request)
    {
        $user = $request->user();   
        $follower = $user->following()->wherePivot('following_id', $request->following_id)->first();
        if ($follower !== null) {
            return response()->json([
                'status' => false,
                'why' => 'already follow this account',
                'data'=>$follower
            ]);
        } else {
            return response()->json([
                'status' => true,
                'why' => 'havent follow this account',
                'data'=>$user->following()
            ]);
        }
    }

    public function follows(Request $request)
    {
        $user = $request->user();
        $follower = $user->following()->wherePivot('following_id', $request->following_id)->first();
        if ($follower !== null) {
            $record = Follow::where('following_id',$request->following_id)->where('user_id',$user->id)->first();
            $record->delete();
            return response()->json([
                'following_account'=>$follower,
                'record'=>$record,
                'status' => false,
                'data' => 'succesfully unfollow this account',
            ]);
        } else {
            $data = new Follow();
            $data->user_id = $user->id;
            $data->following_id = $request->following_id;
            $data->save();
    
            return response()->json(
                [
                    'status'=>true,
                    'follower' => $user->id,
                    'following' => $request->following_id,
                    'isFollowing' => $follower,
                    'data' => $data
                ]);
        }
    }
}
