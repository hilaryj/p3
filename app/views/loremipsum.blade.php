@extends('_master')

@section('title')
	Project 3 - Lorem Ipsum Generator
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>
	<p>'Lorem Ipsum text' refers to filler or dummy text that is used as content when real content isn't available or required. </p>
	<p>Using the form below, you can create your own dummy text.  Specify how many paragraphs you would like, then press the 'Generate text' button to see the results. </p>

	{{ Form::open(array('url' => '/loremipsum', 'method' => 'GET')) }}
	{{ Form::label('paragraphs','How many paragraphs?') }}
	{{ Form::text('paragraphs'); }}
	{{ Form::submit('Generate text!') }}
	{{ Form::close() }}
	<div class="results">
		@foreach($paragraphs as $paragraph => $output)
				<p id="paragraphs">{{ $output }}</p><br>
		@endforeach
	</div>

@stop <!-- this is the content section -->