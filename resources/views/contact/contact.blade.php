@extends('default')

@include('navigation')

@section('content')

<div class="container">

<h1>Contactez-nous</h1>

<form>
    <div class="row">
        <div class="six columns">
            <label for="exampleEmailInput">Votre adresse mail</label>
            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
        </div>
        <div class="six columns">
            <label for="exampleRecipientInput">Raison du mail</label>
            <select class="u-full-width" id="exampleRecipientInput">
                <option value="Questions">Questions ?</option>
                <option value="Admiration">Admiration pour le créateur ?</option>
                <option value="Problems">Un problème sur le site ?</option>
            </select>
        </div>
    </div>
    <br>
    <label for="exampleMessage">Message</label>
    <textarea class="u-full-width" placeholder="Bonjour cher Admin.." id="exampleMessage"></textarea>
    <br><br>
    <label class="example-send-yourself-copy">
        <input type="checkbox">
        <span class="label-body">S'envoyer une copie</span>
    </label>
    <br>
    <input class="button-primary" type="submit" value="Soumettre">
</form>


</div>

@endsection