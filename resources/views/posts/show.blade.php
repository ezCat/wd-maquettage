@include('navigation')

@section('content')

    <div class="page-wrapper">
        <div class="page-inner">

            {{--Row 1--}}

            <div class="row">

                {{-- Col 1 --}}

                <div class="twelve columns"><h2>{{ $post->titre }}</h2></div>

            </div>

            {{-- Row 2--}}

            {{-- Catégories listées --}}

            <div class="twelve columns"><H5>Catégorie</H5></div>
            <h5>{{ $post->libelle_categorie }}</h5>

            {{-- Row 3 --}}

            <div class="row">

                {{-- Col 1 --}}

                {{-- Description --}}

                <div class="seven columns">

                    <h4>Description</h4>

                    <p>{{ $post->description }}</p>

                </div>

                {{-- Col 2 --}}

                <div class="five columns">

                    {{-- Schéma --}}

                    {{--<h4>Schéma</h4>--}}

                    {{-- Vidéo --}}

                    <h4>Vidéo</h4>

                    <iframe width="320" height="440" src="{{ $post->url }}embed" frameborder="0"></iframe>

                </div>

            </div>

        </div>
    </div>

@endsection