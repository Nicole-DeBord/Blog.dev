@extends('layouts.blog-master')


@section('css')
	<style>
		form {
			padding: 15px;
		}

		button {
			margin-top: 10px;
		}

	</style>
@stop


@section('form')
	<div class="row">
		<div class="col-md-12">
			<br>
			<h1>Edit Blag Post</h1>
			<br>

			{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
				@include('posts.form')


				{{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}
		</div>
	</div>
@stop