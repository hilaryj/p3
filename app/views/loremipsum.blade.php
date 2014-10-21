@extends('_master')

@section('title')
	Project 3 - Lorem Ipsum Generator
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>

	{{ Form::open(array('url' => '/loremipsum', 'method' => 'GET')) }}
	{{ Form::label('paragraphs','How many paragraphs?') }}
	{{ Form::text('paragraphs'); }}
	{{ Form::submit('Generate dummy text!') }}
	{{ Form::close() }}
	<div class="results">
		@foreach($paragraphs as $paragraph => $output)
				<p id="paragraphs">{{ $output }}</p><br>
		@endforeach
	</div>

@stop <!-- this is the content section -->