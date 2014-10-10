<?php

# Homepage
Route::get('/', function(){
	return View::make('index'); # call the name of the view, index.blade.php
});


# Lorem Ipsum Generator get & post
Route::get('/loremipsum', function(){

});
Route::post('/loremipsum', function(){

});


# Random User Generator get & post
Route::get('/usergenerator', function(){

});
Route::post('/usergenerator', function(){

});