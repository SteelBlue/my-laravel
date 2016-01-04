@extends('app')

@section('content')

    <div class="content">

        <div class="title">

            <h1>Blog</h1>
            <h2>DEVELOPED USING LARAVEL</h2>
            <hr>
            @if (Auth::check())
                <h4>
                    <a href="{{ action('ArticlesController@create') }}">Create New Article</a>
                </h4>
                <hr>
            @endif

        </div>

        {{-- Display Flash Messages --}}
        @include('flash::message')
        {{-- end flash messages --}}

        @foreach ($articles as $article)

            <article>

                <h3>
                    <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
                </h3>

                <div class="body">
                    {{ $article->body }}
                </div>

            </article>

        @endforeach

    </div>

@stop