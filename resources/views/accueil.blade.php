@extends('navigation')

@section('content')

    {{-- Carrousel --}}
    <div class="carrousel-fixed">
        <div class="cf-title">
            <span class="important">OBJECTIVE</span> produce <span class="important">results.</span><br> Dreams don’t.
        </div>

        <a class="arrow-wrap" href="#content-ci">
            <span class="arrow"></span>
        </a>
    </div>
    {{-- End Caroussel --}}

    {{-- Trois colonnes infos --}}
    <div id="content-ci" class="container align-center" style="margin-top: 50px;">

        <h2><strong>NO MORE<span class="important"> EXCUSES</span></strong></h2>

        <br>
        <br>

        <div class="row">
            {{-- Chart --}}
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <i class="fa fa-line-chart fa-5x"></i>
                <div class="ci-info">
                    Prouves toi que tu peux progresser seul, aucune excuse n'est acceptée lorsqu'il s'agit de se mettre au
                    travail !
                </div>
            </div>
            {{-- Autonome --}}
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <i class="fa fa-hand-rock-o fa-5x"></i>
                <div class="ci-info">
                    Deviens autonome dans l'élaboration de tes entrainements, apprends à devenir ton propre entraineur
                    aujourd'hui !
                </div>
            </div>
            {{-- camera --}}
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <i class="fa fa-camera-retro fa-5x"></i>
                <div class="ci-info">
                    Chaque exercice est accompagné d'un schéma et/ou d'une démonstration en vidéo (Instagram, Youtube,
                    Vine), plus d'excuses !
                </div>
            </div>
        </div>
    </div>
    {{-- End info --}}

    <hr>

    {{-- Bouton --}}
    <div class="container align-center" style="margin-top: 60px; margin-bottom: 50px">

        <h2><strong>DECIDES DE TON<span class="important"> FUTUR</span></strong></h2>

        <br>
        <br>
        <br>

        <div class="chooseOne">
            <div class="row">
                <div class="btn btn-circle show-up c-flatred" data-value="Dribbling & Handle">
                    <img src="{{asset("public/img/dribble.png")}}" width="60%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-darkblue" data-value="Shooting">
                    <img src="{{asset("public/img/bucket.png")}}" width="70%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-lightblue" data-value="Footwork">
                    <img src="{{asset("public/img/speed.png")}}" width="60%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-flatred" data-value="Offensive Moves">
                    <img src="{{asset("public/img/offensivemove.png")}}" width="60%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-darkblue" data-value="Passing">
                    <img src="{{asset("public/img/passing.png")}}" width="60%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-lightblue" data-value="Defense & Agility">
                    <img src="{{asset("public/img/defense.png")}}" width="60%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-flatred" data-value="Post Play">
                    <img src="{{asset("public/img/postplay.png")}}" width="60%" style="margin-top: -7px;">
                </div>
                <div class="btn btn-circle show-up c-lightblue" data-value="Rebound">
                    <img src="{{asset("public/img/rebond.png")}}" width="60%" style="margin-top: -7px;">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <h2>
                    <div class="showValueBtn">Choisis ta catégorie &nbsp; <i class='fa fa-arrow-up'></i></div>
                </h2>
            </div>
        </div>
    </div>
    {{-- End bouton--}}

    <hr>

    {{-- Participe --}}
    <div id="content-ci" class="container align-center" style="margin-top: 65px;">

        <h2><strong>LE TRAVAIL SE<span class="important"> PARTAGE</span></strong></h2>

        <br>
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <i class="fa fa-facebook fa-5x" style="color: #3b5998;"></i>
                <div class="ci-info" style="padding: 15px 120px 15px 120px">Partages tes exercices préférés, afin de faire travailler aussi tes amis.</div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-6">
                <i class="fa fa-group fa-5x"></i>
                <div class="ci-info" style="padding: 15px 120px 15px 120px">Plus haut dans le menu, une fonctionnalité te permets de proposer un exercice.</div>
            </div>

        </div>
    </div>
    {{-- End info --}}

    <div class="footer align-center" style="margin-top: 100px; height: 60px; width: 100%">
        <hr>
        <span class="ci-info">Copyright to Wittmer Dennis, work.</span>
    </div>

    </body>

    </html>

@endsection