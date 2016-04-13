@extends('navigation')

@section('content')

    <div class="page-wrapper">
        <div class="container">

            <div class="row text-center">
                <h1>AJOUTES TON <span class="important"> EXERCICE </span>!</h1>
            </div>

            {!! Form::open(['url' => route('posts.store')]) !!}

            <div class="row space-under">
                <span class="btn btn-circle-title" style="float: left;">1</span>
                <h3 style="margin-top: 7px;">Décris l'exercice</h3>

            </div>

            <div class="row space-under">
                <div class="input-group space-under">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Titre</button>
                    </div>
                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => "Veuillez rentrer le titre de l'article"]) !!}
                </div>
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Veuillez rentrer la description de l'article']) !!}
            </div>

            <div class="row space-under">
                <span class="btn btn-circle-title" style="float: left;">2</span>
                <h3 style="margin-top: 7px;">Ajoutes la vidéo</h3>
            </div>

            <div class="row">
                <div class="col-md-4 col-ld-4 col-xs-12 text-center red video-box">
                    <i class="fa fa-thumbs-up three-logo-column"></i>
                    <h4>Thumbs Up !</h4>
                </div>

                <div class="col-md-4 col-ld-4 col-xs-12 text-center green bordering video-box">
                    <i class="fa fa-thumbs-up three-logo-column"></i>
                    <h4>Thumbs Up !</h4>
                </div>

                <div class="col-md-4 col-ld-4 col-xs-12 text-center blue video-box">
                    <i class="fa fa-thumbs-up three-logo-column"></i>
                    <h4>Thumbs Up !</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-ld-12 col-xs-12 text-center blue video-box">

                    <div class="input-group space-under">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger">URL</button>
                        </div>
                        {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Rentrer l\'URL de la vidéo ici']) !!}
                    </div>
                </div>
            </div>

            <div class="block-hidden">
                {!! Form::radio('id_type_video', 1) !!} <i class="fa fa-youtube"></i> YouTube<br>
                {!! Form::radio('id_type_video', 2) !!} <i class="fa fa-vine"></i> Vine<br>
                {!! Form::radio('id_type_video', 3) !!} <i class="fa fa-instagram"></i> Instagram<br>
            </div>

            <div class="row space-under">
                <span class="btn btn-circle-title" style="float: left;">3</span>
                <h3 style="margin-top: 7px;">L'exercice est-il difficile ?</h3>
            </div>

            <h4 class="space-under">Difficulté de l'exercice :</h4>

            <div id="slider-default" class="slider-info"></div>

            <div class="block-hidden">
                <input type="text" id="value-slider">
            </div>

    </div>
    </div>

    {!! Form::close() !!}

@endsection
