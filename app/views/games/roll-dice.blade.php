<?php
$randomNumber = mt_rand(1,6);
$cast = $randomNumber . '!';
$URL = $_SERVER['REQUEST_URI'];
?>


@extends('layouts.master')

@section('content')
    <h1>Dice Rolling!</h1>
        <p> You Rolled {{{$cast}}}         </p>
        <p> You guessed {{{$guess}}}...    </p>
@stop