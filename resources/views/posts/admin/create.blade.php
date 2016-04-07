@extends('default')

@include('navigation')

@section('content')

    <div class="page-wrapper">
        <div class="page-inner">

            <h1>Ajouter un exercice</h1>

            {!! Form::open(['url' => route('posts.store')]) !!}

            {!! Form::label('', 'Titre') !!}
            {!! Form::text('titre', null, ['class' => 'u-full-width']) !!}<br><br>

            {!! Form::label('', 'Catégorie') !!}
            {!! Form::select('id_categorie', $categories, null,['class' => 'u-full-width']) !!}<br><br>

            {!! Form::label('', 'Sous-catégorie') !!}
            {!! Form::select('id_sous_categorie', $sous_categories, null,['class' => 'u-full-width']) !!}<br><br>

            {!! Form::label('', 'Site d\'origine de la vidéo') !!}
            {!! Form::radio('id_type_video', 1) !!} YouTube<br>
            {!! Form::radio('id_type_video', 2) !!} Vine<br>
            {!! Form::radio('id_type_video', 3) !!} Instagram<br>

            <br>

            {!! Form::label('', 'URL de la vidéo') !!}
            {!! Form::text('url', null, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

            {!! Form::label('', 'Schéma') !!}
            {!! Form::text('image', null, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

            {!! Form::label('', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'u-full-width', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}
            <br><br>

            {!! Form::label('', 'Etat du post') !!}
            {!! Form::radio('id_etat', 1) !!} Offer<br>
            {!! Form::radio('id_etat', 2) !!} Offline<br>
            {!! Form::radio('id_etat', 3) !!} Online<br><br>

            <button class="button-primary">Envoyer</button>

            {!! Form::close() !!}

        </div>

    </div>

@endsection