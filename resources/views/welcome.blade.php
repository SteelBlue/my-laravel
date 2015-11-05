<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: 'Lato';
            }

            a {
                text-decoration: none;
            }

            .left_top_nav {
                position: fixed;
                top: 0;
                left: 0;
            }
            .left_top_nav a {
                display: block;
                margin: 20px 0 0 20px;
            }

            .wrapper {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                display: table;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title h1 {
                font-size: 96px;
                font-weight: 100;
            }

            .copy {

            }
        </style>
    </head>
    <body>

        <div class="left_top_nav">
            <a href="{{ url() }}">
                <i class="fa fa-2x fa-home"></i>
            </a>
            <a href="{{ url('contact') }}">
                <i class="fa fa-2x fa-phone"></i>
            </a>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>Laravel 5</h1>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
