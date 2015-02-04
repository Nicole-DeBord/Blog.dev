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
		}
	</style>
@stop

@section('content')
<div class="container">
	<p>Entry #{{{ $post->id }}}</p>
	<p>Created on {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	<p>Last updated {{{ $post->updated_at->format('l, F jS Y @ h:i:s A') }}}</p>

	


	<hr>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
	<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
</div>
@stop