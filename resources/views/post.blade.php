@extends('layouts.main')

@section('container')

    <article class="border-bottom pb-4">

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    
                    <p>By. <a href="#">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{
                            $post->category->name }}</a></p>
                    
                    <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                    
                    
                    <a href="/posts" class="d-blockk mt-5">Back to Post</a>
                </div>
            </div>
        </div>

    </article>

@endsection