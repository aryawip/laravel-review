<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "POST",
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('posts', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
