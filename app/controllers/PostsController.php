<?php

class PostsController extends \BaseController {


	public function __construct() {

		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {	

		$query = Post::with('user');


		if (Input::has('search')) {

			$search = Input::get('search');

			$query->where('title',        'like', '%' . $search . '%');

			$query->orWhereHas('user', function($q) {

				$search = Input::get('search');

				$q->where('email', 'like', '%' . $search . '%');

			});

			$posts = $query->orderBy('created_at', 'desc')->paginate(4);

		} else {

			$posts = Post::paginate(4);

		}

		return View::make('posts.index')->with('posts', $posts);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


	public function create() {

		// $input = Input::all();
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->user_id = Auth::id();
		return $this->savePost($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		try {

			$post = Post::findOrFail($id);

		} catch (Exception $e) {

			Log::info("User tried to request this id: " . $id);
			App::abort(404);

		}

		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		return $this->savePost($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {

			$post = Post::findOrFail($id);

		} catch (Exception $e) {

			Log::info("User made a bad PostsController requests, id " . $id);
			App::abort(404);

		}

		$post->delete();

		Session::flash('successMessage', 'Post deleted!');

		return Redirect::action('PostsController@index');
	}



	protected function savePost($post) {
	
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {

			Session::flash('errorMessage', 'Failed to save post!');

			Log::info("Title: " . Input::get('title') . ", Body: " . Input::get('body'));

			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			Session::flash('saveMessage', 'Saved post successfully!');

			$post->title = Input::get('title');
			$post->body  = Input::get('body');

			$post->save();

			return Redirect::action('PostsController@index');
		}
	}

	public function user() {

		return $this->belongsTo('User');

	}
}
