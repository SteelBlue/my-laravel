@extends('app')

@section('content')

    <div class="wrapper">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h1>About&nbsp;Me: {{ $name }}</h1>
                </div>
                <div class="copy">
                    <h2>Developus Maximus</h2>
                    <p>This will become text about the legend of Ryan Ebbers.</p>
                </div>
            </div>
        </div>
    </div>

@endsection