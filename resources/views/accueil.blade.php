@extends('default')

@include('navigation')

@section('content')

    <div class="jumbo">
        <div class="container">
            <div class="row">
                <div class="u-full-width">
                    <h1 class="quote">' YOU MUST DO THE THING YOU THINK YOU CANNOT DO. '<br> - Eleanore Roosevelt</h1>
                </div>
            </div>
        </div>

    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="one-third column alignc" style="margin-bottom: 30px">
                <img src="{{ asset('public/img/chronometers.svg') }}" style="width: 150px;"><br><br>
                Gagnez du temps sur le contenu de vos entrainements grâce à cette bibliothèque mobile.
            </div>
            <div class="one-third column alignc" style="margin-bottom: 30px">
                <img src="{{ asset('public/img/search.svg') }}" style="width: 150px;"><br><br>
                Recherchez rapidement des exercices atypiques à l'aide de catégorie typique.
            </div>
            <div class="one-third column alignc" style="margin-bottom: 30px">
                <img src="{{ asset('public/img/filming.svg') }}" style="width: 150px;"><br><br>
                Les exercices sont accompagnés d'un schéma ou d'une vidéo courte illustrant la situation.
            </div>
        </div>
    </div>

@endsection