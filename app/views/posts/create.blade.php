@extends('layouts.blog-master')


@section('styling')
	<style>
		form {
			padding: 15px;
		}

		button {
			margin-top: 10px;
		}

		.container {
			margin-top:30px;
		}
	</style>
@stop


@section('form')
	<div class="row">
			<div class="col-md-12">
				<br>
				<h1>Create Blag Post</h1>
				<br>

				{{ Form::open(array('action' => 'PostsController@store')) }}
					@include('posts.form')


					{{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
				{{ Form::close() }}

			</div>
		</div>
@stop