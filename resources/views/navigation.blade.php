@extends('default')

<?php

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

$categories = DB::table('categories')->get();
$sous_categories = DB::table('sous_categories')->get();

?>

<div id='cssmenu'>

    <ul style="float: right;">
        <li><a href="{{ url('/') }}"> Home </a></li>
        <li class='active'><a href='{{ url('/posts') }}'> Librairie </a></li>
        <li><a href='{{ url('/posts/create') }}'> Participer </a></li>
        <li><a href='{{ url('/contact') }}'> Contact </a></li>
    </ul>

    <ul class="logo-ul" style="float: left">
        <li class="logo-ul"><a href="#" style="padding: 10px 0 0 0"> <span class="logo-wd"> WDINNOVE </span></a></li>
    </ul>

</div>