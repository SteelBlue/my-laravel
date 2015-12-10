@extends('app')

@section('content')

    <div class="title">
        <h1>Edit</h1>
        <h2>{{ $article->title }}</h2>
        <hr>
    </div>

    {{-- Display Form Errors --}}
    @include('errors.list')
    {{-- end form errors --}}

    {{-- Create Article Form --}}
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('published_at', 'Publish On') !!}
            {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Article', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
    {{-- end article form --}}

@stop