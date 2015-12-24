@extends('app')

@section('content')

    <div class="content">

        <div class="title">
            {{--<h1>Blog</h1>--}}
            <h1>Create New Article</h1>
            <hr>
        </div>

        {{-- Display Flash Messages --}}
        @include('flash::message')
        {{-- end flash messages --}}

        {{-- Display Form Errors --}}
        @include('errors.list')
        {{-- end form errors --}}

        {{-- Create Article Form --}}
        {!! Form::open(['action' => 'ArticlesController@store']) !!}
            @include('blog._form', ['submitButtonText' => 'Add Article'])
        {!! Form::close() !!}
        {{-- end article form --}}

    </div>

@stop