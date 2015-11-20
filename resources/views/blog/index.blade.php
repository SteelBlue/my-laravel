@extends('app')

@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="content">

                <div class="title">
                    <h1>Blog</h1>
                    <h2>DEVELOPED USING LARAVEL 5</h2>
                    <hr>
                    <h3>
                        <a href="{{ action('ArticleController@create') }}">Create New Article</a>
                    </h3>
                    <hr>
                </div>

                @foreach ($articles as $article)

                    <article>

                        <h3>
                            <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}</a>
                        </h3>

                        <div class="body">
                            {{ $article->body }}
                        </div>

                    </article>

                @endforeach

            </div>
        </div>
    </div>

@stop