@extends('layouts.main')

@section('container')

    <h1>Post Category: {{ $category }}</h1>

    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}"> {{ $post->title }}</a>
        </h2>
        {{-- <h4>By: {{ $post["author"] }}</h4> --}}
        <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>

@endsection