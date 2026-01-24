<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PDOException;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function show($slug)
    {
        $data = User::where('slug', $slug)->first();
        if ($data) {
            return response()->json($data->load('post')->load('comment')->load('like'));
        }
    }

    public function showAndPost()
    {
        $data = Auth::user();

        return response()->json($data->load('post.user')->load('comment')->load('like'));
    }

    public function showmin($slug)
    {
        $data = User::where('slug', $slug)->first();
        if ($data) {
            return response()->json($data);
        }
    }

    public function register(Request $request)
    {
        try {

            $request->validate([
                'name' => ['unique:users,username', 'required'],
                'email' => ['email', 'required'],
            ]);
            $data = new User;
            $data->name = $request->name;
            $data->username = $request->name;
            $data->email = $request->email;
            $data->nationality = $request->nationality;
            $data->flag = $request->flag;
            $data->password = Hash::make($request->password);
            $data->slug = Str::random(8);
            $data->profile_image = 'profile-images/blank.jpg';
            $data->save();

            return response()->json($data, 200);
        } catch (PDOException $e) {
            return response()->json($e);
        }
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => Auth::check(),
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'bearer',
            ]);
        } else {
            return response()->json(['status' => false, 'data' => 'Wrong email or password']);
        }

    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['status' => true, 'data' => 'Berhasil Logout']);
    }

    public function getUserData()
    {
        return response()->json(Auth::user());
    }

    public function getFollower($id)
    {
        return response()->json(User::find($id)->load('followers'));
    }

    public function getFollowing($id)
    {
        return response()->json(User::find($id)->load('following'));
    }
}
