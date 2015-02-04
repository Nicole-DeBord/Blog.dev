<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);


		// return "Navigating to http://blog.dev/posts should return an index of every blog post.";
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
		return "Deleting a specific post.";
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
}
