@extends('_master')

@section('title')
	Project 3 - User Generator
@stop

@section('content')

	<h1>User Generator</h1>

	{{ Form::open(array('url' => 'usergenerator', 'method' => 'POST')) }}
	
	{{ Form::label('users','How many users?') }}
	{{ Form::text('users'); }}
	<br>
	{{ Form::label('birthdays', 'Include birthday?'); }}
	{{ Form::checkbox('birthdays', 'value'); }}
	<br>
	{{ Form::label('taglines', 'Include tagline?'); }}
	{{ Form::checkbox('taglines', 'value'); }}
	<br>
	{{ Form::submit('Generate users!') }}
	
	{{ Form::close() }}

	<!-- something is missing here... -->
	<!-- if form results 'isset', then echo the results of the form -->
	@if(isset($results))
		<div class="results">
		{{ $results }}
		</div>
	@endif

@stop <!-- this is the content section -->