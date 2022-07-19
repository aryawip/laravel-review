@extends('layouts.main')

@section('container')

<article>
    <h1 class="md-5">{{ $post->title }}</h1>
    {!! $post->body !!}
</article>
    
    <a href="/posts">Back to Post</a>

@endsection