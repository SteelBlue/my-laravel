<!DOCTYPE html>
<html>
<head>
    <title>Ryan Ebbers | Web Developer, App Developer, Entrepreneur</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

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

        ::selection {
            background: #FFC083;
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
        .tooltip.right > .tooltip-inner {
            background-color: #2695af;
        }
        .tooltip.right .tooltip-arrow {
            top: 50%;
            left: 0;
            margin-top: -5px;
            border-right-color: #2695af;
            border-width: 5px 5px 5px 0;
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