@extends('_master')

@section('title')
	Project 3 - User Generator
@stop

@section('content')

	<h1>User Generator</h1>
	<p>Information about random, fictitious users can be helpful if you need filler biographical information to test out a website/app. </p>
	<p>Use the form below to generate a random user.  You can add a birthday or tagline (in Latin-esque <i>lorem ipsum</i> text), too. </p>

	<div class="usergenform">
	<h2>Generate Users: </h2>
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
	</div>
	<h2>Your Users: </h2>
	<!-- something is missing here... -->
	<!-- if form results 'isset', then echo the results of the form -->
	@if(isset($results))
		<div class="results">
		{{ $results }}
		</div>
	@endif

@stop <!-- this is the content section -->