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

	# Get data from form
	$usernumber = Input::Get('users');
	$bday = Input::Get('birthday');
	$tag = Input::Get('tagline');
	$profileinfo = ''; #empty for now

	# Set up Faker generator
	$faker = new Faker\Generator();
	#$faker = Faker::create();

	# Now what?
	# Given the num of requested users do a for loop echoing the relevant information...
	for($i=0; $i<$usernumber; $i++) {
		$profileinfo .= '<p>' . $faker->name . '</p>';
		$profileinfo .= '<p>' . $faker->dateTimeThisCentury->format(mm-dd-y) . '</p>';
		$profileinfo .= '<p>' . $faker->sentence($nbWords = 12) . '</p>' ; 
	}
	#using p to do block element

	#Return generated users
	return View::make('usergenerator')
		->with('users',$usernumber)
		->with('birthday',$bday)
		->with('tagline' $tag)
});
Route::post('/usergenerator', function(){

});