<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::latest()->with('user')->with('category')->get());
    }

    public function show($slug)
    {
        return response()->json(Post::where('slug', $slug)->with('user')->with('category')->with('like')->with('comment.user')->first());
    }

    public function store(Request $request)
    {
        $data = new Post;
        $image = $request->file('image')->store('/post-images');

        $data->image = $image;
        $data->title = $request->title;
        $data->caption = $request->caption;
        $data->category_id = $request->category_id;
        $data->user_id = $request->user_id;
        $data->slug = Str::random(16);
        $data->save();

        return response()->json(['status' => true, 'data' => $data]);
    }

    public function showDetail($id)
    {
        return response()->json(Post::find($id)->load('user')->load('comment')->load('like'));
    }

    public function indexlim()
    {
        return response()->json(Post::latest()->with('user')->with('category')->paginate(6));
    }

    public function addlike($id)
    {
        $data = Post::find($id);
        $data->likeCount += 1;
        $data->push();

        return response()->json($data->likeCount);
    }

    public function showCategory($category)
    {
        return response()->json(Post::where('category_id', $category)->get()->load('category'));
    }

    public function search($name)
    {
        return response()->json(Post::where('title', 'LIKE', "%$name%")
            ->orWhere('caption', 'LIKE', "%$name%")->get()
            ->load('category')->load('user'));
    }

    public function checkLike($id)
    {
        $user = Auth::user();
        $data = Post::find($id)->like->where('user_id', $user->id);
        $isLike = false;
        if(count($data) !== 0) {
            $isLike = true;
            foreach ($data as $d) {
                $d->delete();
            }
            return response()->json(['data' => $data, 'user' => $user,'already like? '=>$isLike,'status'=>false,'message'=>'you are unliking this post']);
        } else {
            $like = new Like();
            $like->user_id = $user->id;
            $like->post_id = $id;

            $like->save();

            return response()->json(['data' => $like, 'user' => $user ,'status'=>true,'message'=>'you are liking this post']);
        }
    }
    public function checkOnly($id)
    {
        $user = Auth::user();
        $data = Post::find($id)->like->where('user_id', $user->id);
        $isLike = false;
        if(count($data) !== 0) {
            $isLike = true;
            return response()->json(['data' => $data, 'user' => $user,'already like? '=>$isLike,'status'=>true,'message'=>'you already liking this post']);
        } else {
            return response()->json(['data' => $data, 'user' => $user ,'status'=>false,'message'=>'you havent liking this post']);
        }
    }
    // public function searchUser()
    // {
    //     $posts = Post::all();

    //     return response()->json($posts->load('user')->where('user_id', 'LIKE', '%1%'));
    // }

    public function trend()
    {
        return response()->json(Post::all()->load('user')->load('category')->
        sortBy('likeCount', SORT_REGULAR, true)->values()->all());
    }
}
