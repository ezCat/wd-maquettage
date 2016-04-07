<!doctype html>
<html lang=''>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('public/js/jquery-2.2.0.js')}}" type="text/javascript"></script>
    {{--<link rel="stylesheet" href="{{ asset('/css/menubar.css') }}">--}}
    {{--<script src="{{ asset('/js/menubar.js') }}"></script>--}}
    {{--<link rel="stylesheet" href="{{ asset('public/css/menubar.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('public/js/menubar.js') }}">--}}
    <link rel="stylesheet" href="{{ asset('public/css/skeleton.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    <title>WDinnove</title>
</head>
<body>

@yield('navigation')

<br>

@yield('content')

{{--<div class="footer alignc">@WDinnove, 2016.</div>--}}
{{--<br>--}}