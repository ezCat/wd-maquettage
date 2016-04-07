@include('navigation')

@section('content')

    <div class="page-wrapper">
        <div class="page-inner">

            @foreach($posts as $post)

                <div class="row">

                    <h1>{{ $post->titre }}</h1>
                    <hr>

                </div>

                <div class="row">

                    <div class="eight columns">
                        {{ $post->description }}
                    </div>

                    <p><a href="{{ route('posts.show', $post->id) }}">
                            <button class="button-primary">Voir</button>
                        </a></p>

                </div>

            @endforeach

        </div>
    </div>

@endsection