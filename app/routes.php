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
	$location = Input::Get('locations');

		for($i=0; $i<$usernumber; $i++) {

			$usersgenerated .= 'Name: <p class="fakername faker">' . $faker->name . '</p>';
			
			if(isset($birthday)) {
				$usersgenerated .= 'Birthdate: <p class="fakerbday faker">' . $faker->date($format = 'Y-m-d', $max = 'now', $min='1950') . '</p>';
			}
			if(isset($location)) {
				$usersgenerated .= 'Location: <p class="fakerloc faker">' . $faker->city . ', ' . $faker->state . '</p>';
			}
			if(isset($tagline)) {
				$usersgenerated .= 'Tagline: <p class="fakertag faker"> "' . $faker->text($maxNbChars = 60) . '"</p>';
			}
			$usersgenerated .= '<hr>';
		}

	return View::make('usergenerator')
		->with('results', $usersgenerated);

});