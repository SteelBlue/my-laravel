@extends('app')

@section('content')

    <div class="title">

        <h1>Blog</h1>
        <h2>{{ $article->title }}</h2>
        <hr>
        @if (Auth::check())
            <a href="{{ action('ArticlesController@edit', $article->id) }}">Edit Article</a>
            <hr>
        @endif
        
    </div>

    <article>

        <div class="body">
            {{ $article->body }}
        </div>

    </article>

@stop