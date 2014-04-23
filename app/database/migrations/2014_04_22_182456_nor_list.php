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
			$table->string('id');
			$table->string('case_id');
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('dob')->nullable();
			$table->string('ssn')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('street1')->nullable();
			$table->string('street2')->nullable();
			$table->string('city')->nullable();
			$table->string('state');
			$table->string('zip')->nullable();
			$table->longtext('info')->nullable();
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
