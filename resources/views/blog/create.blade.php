@extends('app')

@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="content">

                <div class="title">
                    <h1>Blog</h1>
                    <h2>Create New Article</h2>
                    <hr>
                </div>

                @if (Session::has('flash_notification.message'))
                    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        {{ Session::get('flash_notification.message') }}
                    </div>
                @endif

                {!! Form::open(['action' => 'ArticleController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('body', 'Body') !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop