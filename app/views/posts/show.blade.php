@extends('layouts.master')

@section('content')
	<div class="blog">
		<div class="post">
    		<h1> {{{ $post->title }}} </h1>
    		<p> {{{ $post->body}}}</p>
    		<p>  {{{  $post->created_at->format('l, F jS Y @ h:i:s A') }}} </p>
		</div>
	</div>


@stop