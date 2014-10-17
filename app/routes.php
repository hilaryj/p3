<?php

# Homepage
Route::get('/', function(){
	return View::make('index'); # call the name of the view, index.blade.php
});


# Lorem Ipsum Generator get & post
Route::get('/loremipsum', function(){
	$output = Input::get('paragraphs');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($output);
	return View::make('loremipsum')
		->with('paragraphs', $paragraphs);
});
Route::post('/loremipsum', function(){

});


# Random User Generator get & post
Route::get('/usergenerator', function(){
	return View::make('usergenerator');
});
Route::post('/usergenerator', function(){

});