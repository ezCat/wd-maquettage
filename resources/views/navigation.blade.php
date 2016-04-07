<?php

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

$categories = DB::table('categories')->get();
$sous_categories = DB::table('sous_categories')->get();

?>

{{--<head>--}}
    {{--<link rel="stylesheet" href="{{ asset('public/css/menubar.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('public/js/menubar.js') }}">--}}
{{--</head>--}}

{{--<div id='cssmenu'>--}}
    {{--<ul>--}}
        {{--<li><a href='#'><img src="{{asset('public/img/basketball-basket.png')}}" style="height: 5%"></a></li>--}}
        {{--<li><a href='#'>Home</a></li>--}}
        {{--<li class='active'><a href='#'>Products</a>--}}
            {{--<ul>--}}
                {{--<li><a href='#'>Product 1</a>--}}
                    {{--<ul>--}}
                        {{--<li><a href='#'>Sub Product</a></li>--}}
                        {{--<li><a href='#'>Sub Product</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href='#'>Product 2</a>--}}
                    {{--<ul>--}}
                        {{--<li><a href='#'>Sub Product</a></li>--}}
                        {{--<li><a href='#'>Sub Product</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href='#'>About</a></li>--}}
        {{--<li><a href='#'>Contact</a></li>--}}
    {{--</ul>--}}
{{--</div>--}}

<head>
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-theme.css') }}">

    <style>
        .marginBottom-0 {
            margin-bottom: 0;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px 6px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #cccccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #555;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

        .dropdown-submenu.pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }
    </style>

    <script src="{{asset('public/js/jquery-2.2.0.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public//js/bootstrap.js') }}"></script>
    <script>
        (function ($) {
            $(document).ready(function () {
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>
</head>

<nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/login') }}"><span><img width="30px" src="{{asset('public/img/dribble3.png')}}"></span></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href='{{ route('accueil') }}'>Home</a></li>

            {{--<li class='has-sub'><a href='{{ route('posts.index') }}'>Bibliothèque</a>--}}
            {{--<ul>--}}
            {{--@foreach($categories as $categorie)--}}
            {{--<li class='has-sub'><a href='#'>{{ $categorie->name }}</a>--}}
            {{--<ul>--}}
            {{--@foreach($sub_categories as $sub_categorie)--}}
            {{--<li><a href='{{ route('posts.index') }}'>{{ $sub_categorie->name }}</a></li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}


            <li class="dropdown"><a href="{{ route('posts.index') }}" class="dropdown-toggle" data-toggle="dropdown">Bibliothèque <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    @foreach($categories as $categorie)
                    {{--<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $categorie->libelle_categorie }}</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--@foreach($sous_categories as $sous_categorie)--}}
                                {{--<li><a href="#">{{ $sous_categorie->libelle_sous_categorie }}</a></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                        <li class="dropdown"><a href="{{ route('posts.index', ['categorie' => $categorie->id]) }}">{{ $categorie->libelle_categorie }}</a>
                    @endforeach
                </ul>
            </li>


            <li><a href='{{ route('posts.create') }}'>Proposer un exercice</a></li>
            <li><a href='{{ route('about') }}'>A propos</a></li>
            <li><a href='{{ route('contactus') }}'>Contact</a></li>

            @if(\Illuminate\Support\Facades\Auth::check())
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Adminsitration <b
                            class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href='{{ route('admin.posts.create') }}'>Ajouter un exercice</a></li>
                    <li><a href='{{ route('admin.posts.index') }}'>Modifier un exercice</a></li>
                    <li><a href='{{ route('admin.posts.valid') }}'>Valider un exercice</a></li>
                </ul>
            </li>
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>


