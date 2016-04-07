@extends('default')

@include('navigation')

@section('content')

    <div class="container">

        <h1>Editer</h1>

        {!! Form::open(['method' => 'put', 'url' => route('admin.posts.update', $post) ]) !!}

        {!! Form::label('', 'Titre') !!}
        {!! Form::text('titre', $post->titre, ['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('', 'Catégorie') !!}
        {!! Form::select('id_categorie', $categories, $post->id_categorie,['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('sub_categorie', 'Sous-catégorie') !!}
        {!! Form::select('id_sub_categorie', $sous_categories, $post->id_sous_categorie,['class' => 'u-full-width']) !!}<br><br>

        {!! Form::label('', 'Site d\'origine de la vidéo') !!}
        {!! Form::radio('id_type_video', 1) !!} YouTube<br>
        {!! Form::radio('id_type_video', 2) !!} Vine<br>
        {!! Form::radio('id_type_video', 3) !!} Instagram<br>

        <br>

        {!! Form::label('', 'URL de la vidéo') !!}
        {!! Form::text('url', $post->url, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

        {!! Form::label('', 'Schéma') !!}
        {!! Form::text('image', $post->image, ['class' => 'u-full-width', 'placeholder' => '']) !!}<br><br>

        {!! Form::label('', 'Description') !!}
        {!! Form::textarea('description', $post->description, ['class' => 'u-full-width', 'placeholder' => 'Cet exercice a pour objectif de..']) !!}<br><br>

        <label>Etat</label>
        {!! Form::select('id_etat', $etats, $post->id_etat,['class' => 'u-full-width']) !!}<br><br>
        <br>

        <button class="button-primary">Envoyer</button>

        {!! Form::close() !!}





    </div>

@endsection