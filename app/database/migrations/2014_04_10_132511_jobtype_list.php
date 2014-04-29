<?php

use Illuminate\Database\Migrations\Migration;

class JobtypeList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobtype_list', function($table){
			$table->increments('id');
			$table->string('type');
			$table->string('auth_type');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}