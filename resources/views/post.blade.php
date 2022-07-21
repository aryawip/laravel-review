@extends('layouts.main')

@section('container')

    <article class="border-bottom pb-4">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="md-5">{{ $post->title }}</h1>
                    
                    <p>By. <a href="#">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{
                            $post->category->name }}</a></p>
                    
                    {!! $post->body !!}
                    
                    <a href="/posts" class="d-blockk mt-5">Back to Post</a>
                </div>
            </div>
        </div>

    </article>

@endsection