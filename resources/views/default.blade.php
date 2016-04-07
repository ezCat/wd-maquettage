<!doctype html>
<html lang=''>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset("public/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("public/css/menubar.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="{{ asset('public/js/jquery-2.2.0.js') }}" type="text/javascript"></script>
    <script src="{{ asset("public/js/main.js") }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/modernizr.js') }}" type="text/javascript"></script>

    <title>WDinnove</title>
</head>
<body>

@yield('content')