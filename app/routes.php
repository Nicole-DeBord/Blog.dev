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

// Creates Route to Say Hello Test View:

Route::get('say-hello/{name}/{age}', function($name, $age) {

	return "Hello $name! I hear you're $age years old.";

});


// Creates Route to Dice Roll Game View: 

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


// Blog.dev Root View:

Route::get('/', 'HomeController@showWelcome');

Route::get('say-hello/{name}/{age}', 'HomeController@sayHello');


// Resume and Portfolio Views:

Route::get('resume', 'HomeController@getResume');

Route::get('portfolio', 'HomeController@getPortfolio');


// National Parks and Whack-a-Pony Views:

Route::get('parks', 'HomeController@getParks');

Route::get('whack', 'HomeController@getWhack');


// PostsController Blog Resources Views:

Route::resource('posts', 'PostsController');

// Blog Login/Logout Views: 

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');
