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
            color: #2695af;
        }

        a {
            text-decoration: none;
            color: #22617A;
        }

        .left_top_nav {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .left_top_nav a {
            display: block;
            margin: 20px 0 0 20px;
            color: #2695af;
        }

        #holder {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .wrapper {
            opacity: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: table;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
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

        .title h2 {
            font-size: 30px;
            font-weight: 100;
            text-transform: uppercase;
        }

        .copy {

        }
    </style>
</head>
<body>

    @include('includes.sideNav')

    <div id="holder">