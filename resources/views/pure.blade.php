<html>
<head>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset("/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/menubar.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="{{ asset('/js/jquery-2.2.0.js') }}" type="text/javascript"></script>
    <script src="{{ asset("/js/main.js") }}" type="text/javascript"></script>
    <script src="{{ asset('/js/modernizr.js') }}" type="text/javascript"></script>
</head>

<body>

{{-- Header --}}
<div id='cssmenu'>

    <ul style="float: right;">
        <li><a href="#"> Home </a></li>
        <li class='active'><a href='#'> Products </a></li>
        <li><a href='#'> About </a></li>
        <li><a href='#'> Contact </a></li>
        </li>
    </ul>

    <ul class="logo-ul" style="float: left">
        <li class="logo-ul"><a href="#" style="padding: 10px 0 0 0"> <span class="logo-wd"> WDINNOVE </span></a></li>
    </ul>

</div>
{{-- End Header --}}

{{--  Content --}}

<div class="page-wrapper">
    <div class="page-inner">

        <h1>Ajouter un exercice</h1>

        <br>
        <input type="text" placeholder="Text"> <br><br>
        <input type="checkbox"> Checkbox<br><br>
        <input type="radio"> Radio<br><br>
        <select>
            <option>Select</option>
            <option>Select</option>
            <option>Select</option>
            <option>Select</option>
        </select><br><br>

        <button class=" btn btn-primary">Envoyer</button>

    </div>

    <br><br>
    <br>
    <br>



    <div class="page-inner">
        Yo
    </div>
</div>
</div>

{{-- End Content --}}


</body>

</html>