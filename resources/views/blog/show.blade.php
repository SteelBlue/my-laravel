@extends('app')

@section('content')

    <div class="content">

        <div class="title">

            <h1>Blog</h1>
            <h2>{{ $article->title }}</h2>
            <hr>
            @if (Auth::check())
                <h4>
                    <a href="{{ action('ArticlesController@edit', $article->id) }}">Edit Article</a>
                </h4>
                <hr>
            @endif

            <h3>Most Recent Article</h3>
            <a href="{{ action('ArticlesController@show', $latest->id) }}">{{ $latest->title }}</a>
            <hr>

        </div>

        <article>

            <div class="body">
                {{ $article->body }}
            </div>

            @unless ($article->tags->isEmpty())
            <div class="tags">

                <h5>Tags</h5>
                <ul class="list-unstyled">
                    @foreach ($article->tags as $tag)
                        <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>

            </div>
            @endunless

        </article>

    </div>

@stop