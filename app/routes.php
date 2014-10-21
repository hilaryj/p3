<?php

# Homepage
Route::get('/', function(){
	return View::make('index'); # index.blade.php
});

# Lorem Ipsum Generator; Get, Post
Route::get('loremipsum', function(){
	$output = Input::get('paragraphs');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($output);
	return View::make('loremipsum')
		->with('paragraphs', $paragraphs);
});
Route::post('loremipsum', function(){

});

# Random User Generator; Get, Post
Route::get('usergenerator', function(){
	return View::make('usergenerator'); # usergenerator.blade.php
});
Route::post('usergenerator', function(){

	$faker = Faker\Factory::create();
	$usernumber = Input::Get('users');
	$usersgenerated = "";
	$birthday = Input::Get('birthdays');
	$tagline = Input::Get('taglines');

		for($i=0; $i<$usernumber; $i++) {

			$usersgenerated .= '<p class="fakername">' . $faker->name . '</p>';
			
			if(isset($birthday)) {
				$usersgenerated .= '<p>' . $faker->date($format = 'Y-m-d', $max = 'now') . '</p>';
			}
			if(isset($tagline)) {
				$usersgenerated .= '<p class="fakertag">' . $faker->text($maxNbChars = 60) . '</p>';
			}
			$usersgenerated .= '<hr>';
		}

	return View::make('usergenerator')
		->with('results', $usersgenerated);

});