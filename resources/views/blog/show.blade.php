@extends('app')

@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="content">

                <div class="title">
                    <h1>Blog</h1>
                    <h2>DEVELOPED USING LARAVEL 5</h2>
                    <hr>
                </div>

                <article>

                    <h3>
                        <a href="#">{{ $article->title }}</a>
                    </h3>

                    <div class="body">
                        {{ $article->body }}
                    </div>

                </article>

            </div>
        </div>
    </div>

@stop