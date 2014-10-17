@extends('_master')

@section('title')
	Project 3 - User Generator
@stop

@section('content')
	<h1>User Generator</h1>

	{{ Form::open(array('url' => '/loremipsum', 'method' => 'GET')) }}
	{{ Form::label('users','How many users?') }}
	{{ Form::text('users'); }}
	<br>
	{{ Form::label('birthday', 'Include birthday?'); }}
	{{ Form::checkbox('birthday', 'value'); }}
	<br>
	{{ Form::label('tagline', 'Include tagline?'); }}
	{{ Form::checkbox('tagline', 'value'); }}
	<br>
	{{ Form::submit('Generate users!') }}
	{{ Form::close() }}

	@foreach($users as $user => $result)
		<p>{{ $result }}</p>
	@endforeach
	@foreach
	@endforeach
	@foreach
	@endforeach


@stop <!-- this is the content section -->