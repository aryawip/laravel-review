{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

    <article class="border-bottom pb-4">
        <h1 class="md-5">{{ $post->title }}</h1>
        
        <p>By. <a href="#">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!} </p>
        
        <a href="/posts" class="d-blockk mt-5">Back to Post</a>
    </article>

@endsection