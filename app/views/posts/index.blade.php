@extends('layouts.blog-master')


@section('title')
	Laravel Blag - Home
@stop


@section('css')
	<style>
		h1 {

			font-size: 450%;
		}

		p {
			margin-left: 50px;
			font-size: 120%;
		}

	</style>
@stop


@section('greeting')
	<!-- <h1>Sparkle Glitter Happy Laravel Blog</h1> -->
	<h1>Laravel Blog: Rainbow Powered!</h1>
@stop


@section('content')

	@foreach($posts as $post)
	<article>
		<hr>
		<p class="pull-right">Posted {{{ $post->created_at->diffForHumans() }}}</p>
		<h3>{{ $post->title }}</h3>
		<h5>By {{{ $post->user->email }}}</h5>
		<p>{{ $post->body }}</p>

		<a href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
	</article>
	@endforeach

	{{ $posts->appends(array('search' => Input::get('search')))->links() }}

@stop
