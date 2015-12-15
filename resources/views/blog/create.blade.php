@extends('app')

@section('content')

    <div class="title">
        {{--<h1>Blog</h1>--}}
        <h1>Create New Article</h1>
        <hr>
    </div>

    {{-- Display Flash Messages --}}
    @if (Session::has('flash_notification.message'))
        <div class="alert alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
    {{-- end flash messages --}}

    {{-- Display Form Errors --}}
    @include('errors.list')
    {{-- end form errors --}}

    {{-- Create Article Form --}}
    {!! Form::open(['action' => 'ArticlesController@store']) !!}
        @include('blog._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}
    {{-- end article form --}}

@stop