<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('home', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Pos 1",
            "slug"  => "judul-pos-1",
            "author" => "Arya W",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit harum quam, 
        voluptas at alias accusantium culpa. Eveniet fugit doloremque atque ipsa sunt,
        quisquam sapiente distinctio modi architecto porro voluptas laborum."
        ],
        [
            "title" => "Judul Pos 2",
            "slug"  => "judul-pos-2",
            "author" => "Arya P",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum 
        pariatur dolores officia tempore, laudantium suscipit repellat error quidem nihil. 
        Sit adipisci earum ea explicabo rem maxime similique, placeat quo ipsum?"
        ],
    ];

    return view('post', [
        "title" => "POST",
        "posts" => $blog_post
    ]);
});

//halaman single post

Route::get('/post/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Judul Pos 1",
            "slug"  => "judul-pos-1",
            "author" => "Arya W",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit harum quam, 
        voluptas at alias accusantium culpa. Eveniet fugit doloremque atque ipsa sunt,
        quisquam sapiente distinctio modi architecto porro voluptas laborum."
        ],
        [
            "title" => "Judul Pos 2",
            "slug"  => "judul-pos-2",
            "author" => "Arya P",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum 
        pariatur dolores officia tempore, laudantium suscipit repellat error quidem nihil. 
        Sit adipisci earum ea explicabo rem maxime similique, placeat quo ipsum?"
        ],
    ];

    $new_post = [];

    foreach($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('posts', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "name" => "Arya Wira Pahlawan",
        "email" => "aryawira@gmail.com"
    ]);
});