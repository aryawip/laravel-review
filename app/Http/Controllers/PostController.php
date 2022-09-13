<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest();

        if (request('search')) {
            $post->where('title', 'like', '%' . \request('search') . '%')
                ->orWhere('body', 'like', '%' . \request('search') . '%');
        }

        return view('posts', [
            "title" => "All POST",
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => $post->get()
        ]);
    }

    public function show(Post $post)
    {
        // \dd($post);
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
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
