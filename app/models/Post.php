<?php

// Make Carbon accessible:  
use Carbon\Carbon;


class Post extends \BaseModel {

	protected $table = 'posts';

	public static $rules = [

		'title' => 'required|max:100',
		'body'  => 'required'

	];


	public function user() {

		return $this->belongsTo('User');
		
	}


	public function renderBody($summary = false) {

		$body = $this->body;

		if ($summary == true) {

			$body = str_limit($body, 250);

		}

		$parsedown = new Parsedown();
		
		$body = $parsedown->text($body);

		$config = HTMLPurifier_Config::createDefault();

		$purifier = new HTMLPurifier($config);

		$cleanBody = $purifier->purify($body);

		return $cleanBody;

	}


}