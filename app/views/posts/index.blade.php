@extends('layouts.blog-master')

@section('title')
	Blag!
@stop

@section('styling')
	<style>
		h1 {

			font-size: 450%;
		
		}

		p {
			margin-left: 50px;
			font-size: 120%;
		}

		#entry {
			color: blue;
		}
	</style>
@stop

@section('greeting')

<h1>Sparkle Glitter Happy Laravel Blog</h1>

@stop


@section('content')

	@foreach($posts as $post)
	<article>
		<hr>
		<p class="pull-right">Posted {{{ $post->created_at->diffForHumans() }}}</p>
		<h3>{{ $post->title }}</h3>
		<p>{{ $post->body }}</p>

		<a href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
	</article>
	@endforeach

	{{ $posts->links() }}

@stop
