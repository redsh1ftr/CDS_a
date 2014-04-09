<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorksiteList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('worksite_list', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('worksite_type');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone_number');
			$table->string('fax_number');
			$table->string('email');
			$table->string('hours');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('access_info');
			$table->longtext('notes');
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
		Schema::drop('worksite_list');
	}

}