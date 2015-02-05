<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello');
		// return View::make('hello');
	}


	public function sayHello($name, $age) {

		return View::make('say-hello')->with('name', $name)->with('age', $age);
	}


	public function getResume() {

		return View::make('resume');
	}


	public function getPortfolio() {

		return View::make('portfolio');
	}


	public function getWhack() {

		return View::make('whack');
	}


	public function getParks() {

		return View::make('parks');
	}


	public function showLogin() {

		return View::make('login');
	}


	public function doLogin() {

		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {

			Session::flash('successMessage', "Login successful - welcome!");
    		return Redirect::intended('/');

		} else {

			Session::flash('errorMessage', "Login failed, please re-enter credentials.");
    		return Redirect::action('PostsController@index');
		};
	}

	public function doLogout() {

		Auth::logout();
		Session::flash('successMessage', "See you later, alligator.");
		return Redirect::action('PostsController@index');
	}
}



