<?php

use Illuminate\Database\Migrations\Migration;

class StatusLetters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('status_letters', function($table){
			$table->increments('id');
			$table->string('name');
			$table->longtext('verbiage');
			$table->longtext('response');
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
		Schema::drop('status_letters');
	}

}