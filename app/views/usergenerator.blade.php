@extends('_master')

@section('title')
	Project 3 - User Generator
@stop

@section('content')
	<h1>User Generator</h1>
	<?php
	# Instantiate a new RandomStringGenerator Object
	$string_generator = new RndStr();

	# Use the generate() method on this object
	echo $string_generator->generate(10);
	?>
@stop <!-- this is the content section -->