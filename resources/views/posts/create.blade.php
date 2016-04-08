@extends('navigation')

@section('content')

    <div class="page-wrapper">

    <div class="row">
        <h1><span class="important">AJOUTES</span> TON EXERCICE</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <img src="{{ asset('public/img/mail.svg')}}" width="80%" height="100%">
        </div>

        <div class="col-md-8">

            {!! Form::open(['url' => route('posts.store')]) !!}
            <br><br>

            <span class="btn btn-circle-title" style="float: left;">1</span> 
            <h3 style="margin-top: 7px;">Définissez l'exercice</h3>

            <br><br>

            {!! Form::label('', 'Titre') !!}
            {!! Form::text('titre', null, ['class' => 'form-control']) !!}<br><br>

            {!! Form::label('', 'Catégorie') !!}
            {!! Form::select('id_categorie', $categories, null,['class' => 'form-control']) !!}<br><br>

            {!! Form::label('', 'Site d\'origine de la vidéo') !!}<br>
            {!! Form::radio('id_type_video', 1) !!} <i class="fa fa-youtube"></i> YouTube<br>
            {!! Form::radio('id_type_video', 2) !!} <i class="fa fa-vine"></i> Vine<br>
            {!! Form::radio('id_type_video', 3) !!} <i class="fa fa-instagram"></i> Instagram<br>

            <br>

            {!! Form::label('', 'URL de la vidéo') !!}
            {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br><br>

            {!! Form::label('', 'URL du schéma') !!}
            {!! Form::text('image', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br><br>

            {!! Form::label('', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}
            <br><br>

            <button class="btn btn-primary">Envoyer</button>

            {!! Form::close() !!}

        </div>
    </div>
    </div>

@endsection