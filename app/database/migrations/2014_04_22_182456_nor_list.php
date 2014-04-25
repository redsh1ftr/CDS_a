<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NorList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('nor_list', function($table){
			$table->increments('id');
			$table->string('nor_id');
			$table->string('case_id');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('dob');
			$table->string('ssn');
			$table->string('email');
			$table->string('phone');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->longtext('info');
			$table->string('created_user');
			$table->string('updated_user');
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
		Schema::drop('nor_list');
	}

}
