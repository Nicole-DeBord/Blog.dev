@extends('layouts.blog-master')

@section('title')
	Show Entry
@stop

@section('styling')
	<style>

		h2 {
			text-decoration: italic;
		}

		p {
			font-size: 150%;
			padding: 20px;
		}

		#user {
			
			margin-top: 75px;
		}

	</style>
@stop

@section('content')
	<div>
		<h1>{{{ $post->title }}}</h1>
		<h5>Blog entry #{{{ $post->id }}} | Authored by {{{ $post->user->email }}}</h5>
		<h5>Created on {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h5>
		<!-- <h5>Last update {{{ $post->updated_at->format('l, F jS Y @ h:i:s A') }}}</h5> --> 
		<p>{{{ $post->body }}}</p>
	</div>
	<hr>

	<div class="row">
 		<div class="col-md-3">
			<div class="clearfix">
				{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
					{{ Form::submit('Delete Post', array('class' => 'btn btn-danger pull-right')) }}

				<a class="btn btn-primary pull-left" href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
				{{ Form::close() }}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">

			<div class="user">
			@if (Auth::guest())
				<h5>Currently viewing as guest</h5>
			@endif

			@if (Auth::check())
				<h5>Currently logged in as {{{ Auth::user()->email }}}</h5>
				<!-- id {{{ Auth::id() }}} -->
			@endif

			</div>
	
		</div>
	</div>
@stop