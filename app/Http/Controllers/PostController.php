<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All POST",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        // \dd($post);
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function indexAuthor(User $author)
    {
        return view('posts', [
            'title' => "Post By Author : $author->name",
            'posts' => $author->post->load('category', 'author')
        ]);
    }
}
