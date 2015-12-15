@extends('app')

@section('content')

    <div class="title">
        <h1>Blog</h1>
        <h2>
            <a href="#">{{ $article->title }}</a>
        </h2>
        <hr>
        @if (Auth::check())
            <h3>
                <a href="{{ action('ArticlesController@edit', $article->id) }}">Edit Article</a>
            </h3>
            <hr>
        @endif
    </div>

    <article>

        <div class="body">
            {{ $article->body }}
        </div>

    </article>

@stop