<!-- index.blade.php -->

@extends('layouts.master')

@section('content')
<input type="text" class="form-control" placeholder="Search by Keyword" name="serach" value='{{ Input::get('search') }}'>
<button class="form-control" type="submit">Search</button>
    <h1> All posts </h1>

    @foreach($posts as $post)
        <!-- <h2> {{{ $post->title }}}</h2> -->

        <h2><a href="{{{ action('PostsController@show', ['post' => $post->id ])}}}"> {{{ $post->title }}}</a> </h2>
        <h3>{{ $post->created_at->format('l, F jS Y @ h:i A'); }}</h3>
        <p> {{{ $post->body }}}</p>

    @endforeach

    <p>

        <br>
        <a href="{{{ action('PostsController@create' )}}}">
            Create a new one
        </a>
    </p>
@stop