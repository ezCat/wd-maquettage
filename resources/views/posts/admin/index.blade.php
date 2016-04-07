@extends('default')

@include('navigation')

@section('content')

    <div class="container">

    @foreach($posts as $post)

        <div class="row">

            <h1>{{ $post->titre }}</h1><hr>

        </div>

        <div class="row">

            <div class="eight columns">
                {{ $post->description }}
            </div>

            <p>
                @if($post->id_etat == 1)
                    <a href="{{ route('admin.posts.edit', $post->id) }}"><button class="button-success">Valider</button></a>
                @else
                    <a href="{{ route('admin.posts.edit', $post->id) }}"><button class="button-primary">Editer</button></a>
                @endif
                    <a href="{{ route('admin.posts.show', $post->id) }}"><button class="button">Voir</button></a>
            </p>

        </div>

    @endforeach

    </div>

@endsection