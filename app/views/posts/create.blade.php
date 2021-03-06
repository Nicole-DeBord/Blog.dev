@extends('layouts.blog-master')


@section('title')
	Laravel Blag - Create New Entry	
@stop

@section('top-script')

	<link rel="stylesheet" href="/bootstrap/css/bootstrap-markdown.min.css">

@stop


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
			<h1>Create Blag Post</h1>
			<br>
			{{ Form::open(array('action' => 'PostsController@store')) }}
				@include('posts.form')


				{{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>
	</div>
@stop

@section('bottom-script')
	<script src="/bootstrap/js/bootstrap-markdown.js"></script>
@stop