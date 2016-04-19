<!-- index.blade.php -->

@extends('layouts.master')

@section('content')
<div class="blog">
    <div class="header">
        <label class="title">LOGAN CHRISTOPHER</label>
            <i class="descrip">Code Junkie, Gold on League</i>
            <br>
    </div>
<!-- <input type="text" class="form-control" placeholder="Search by Keyword" name="serach" value='{{ Input::get('search') }}'>
<button class="form-control" type="submit">Search</button> -->


    @foreach($posts as $post)
        <!-- <h2> {{{ $post->title }}}</h2> -->
        <div class="post">
            <h2 class="post-title"><a href="{{{ action('PostsController@show', ['post' => $post->id ])}}}"> {{{ $post->title }}}</a></h2>
            <br>{{ $post->created_at->format('l, F jS Y @ h:i A'); }}</br>
            <p class="date"> Written By: {{{ $post->user->first_name . " " . $post->user->last_name }}} </p>
        </div>

    @endforeach

    <p>

        <br>
        <a href="{{{ action('PostsController@create' )}}}" class="create">
            Create a new one
        </a>
    </p>
    {{ $posts->links() }}
</div>

@stop