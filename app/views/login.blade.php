@extends('layouts.master')

@section('content')
	<div class="blog">
    {{ Form::open(array('action' => 'UserController@doLogin', 'class' => 'form-signin')) }}
    	@if (Session::has('errorMessage'))
			<div class="alert">{{{ Session::get('errorMessage') }}}</div>

		@elseif (Session::has('successMessage'))
			<div class="alert">{{{ Session::get('successMessage') }}}</div>
		@endif

			<h2 class="form-signin-heading">Please sign in</h2>
				{{ $errors->has('email') ? $errors->first('email', '<p><span class="help-block">:message</span></p>') : '' }}
				{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}

				{{ $errors->has('password') ? $errors->first('password', '<p><span class="help-block">:message</span></p>') : '' }}
				{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
			<br>
				{{ Form::submit('Sign in', array('class' => 'btn-log')); }}
	{{ Form::close() }}
</div>

@stop