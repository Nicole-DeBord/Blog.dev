<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('users', function($table) {

			$table->increments('id');
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('email', 200)->unique();
			$table->string('password', 255);
			$table->rememberToken();
			$table->timestamps();

			$table->integer('role_id')->unsigned()->nullable();
		    $table->foreign('role_id')->references('id')->on('roles')->onDelete;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {

		Schema::drop('users');

	}

}
