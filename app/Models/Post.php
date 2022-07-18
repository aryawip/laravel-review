<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
