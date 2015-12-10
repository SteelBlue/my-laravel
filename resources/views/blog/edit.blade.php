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
        @include('blog._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}
    {{-- end article form --}}

@stop