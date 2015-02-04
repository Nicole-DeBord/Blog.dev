<?php

// Make Carbon accessible:  
use Carbon\Carbon;


class Post extends \BaseModel {

	protected $table = 'posts';

	public static $rules = [

		'title' => 'required|max:100',
		'body'  => 'required'

	];
}