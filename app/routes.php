<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('say-hello/{name}/{age}', function($name, $age) {

	return "Hello $name! I hear you're $age years old.";

});


// Dice Roll Game: 

Route::get('diceroll/{guess}', function($guess) {

	$success = '';
	$diceRoll = rand(1, 6);

	if ($diceRoll == $guess) {
		$success = "are successful! Bask in your glory!";
	} else {
		$success = "fail at life. :(";
	}

	$message = "You guessed {$guess}, you rolled $diceRoll! You {$success}";

	$data = [
		'roll'    => $diceRoll,
		'guess'   => $guess,
		'success' => $success
	];

	return View::make('roll-dice')->with($data);
});


Route::get('/', 'HomeController@showWelcome');

Route::get('say-hello/{name}/{age}', 'HomeController@sayHello');

Route::get('resume', 'HomeController@getResume');

Route::get('portfolio', 'HomeController@getPortfolio');

Route::resource('posts', 'PostsController');

Route::get('parks', 'HomeController@getParks');

Route::get('whack', 'HomeController@getWhack');

