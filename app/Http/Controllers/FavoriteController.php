<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        return response()->json(Favorite::all()->load('user')->load('post'));
    }

    public function show($id)
    {
        return response()->json(Favorite::find($id)->load('user')->load('post')->first());
    }

    public function store(Request $request)
    {
        $isSave = Favorite::where('post_id', $request->post_id)->where('user_id', $request->user_id)->first();
        if (!$isSave) {
            $data = new Favorite;
            $data->user_id = $request->user_id;
            $data->post_id = $request->post_id;
            $data->save();

            return response()->json(['status' => true, 'data' => $data]);
        } else {
            return response()->json(['status' => false, 'data' => 'Already save this post']);
        }

    }
}
