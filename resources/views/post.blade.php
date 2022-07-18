@extends('layouts.main')

@section('container')
    <article class="mb-5">
        @foreach ($posts as $post)
        <h2>
            <a href="/post/{{ $post["slug"] }}"> {{ $post["title"] }}</a>
        </h2>
        <h4>By: {{ $post["author"] }}</h4>
        <p>{{ $post["body"] }}</p>
        @endforeach
    </article>
@endsection



