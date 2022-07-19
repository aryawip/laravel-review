{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

<article>
    <h1 class="md-5">{{ $post->title }}</h1>
    <p>By Arya Wira in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
    
    <a href="/posts">Back to Post</a>

@endsection