<?php

use Illuminate\Database\Migrations\Migration;

class AttorneyList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('attorney_list', function($table){
			$table->increments('id');
			$table->string('p_number');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('atty_email');
			$table->string('atty_phone');
			$table->string('secretary');
			$table->string('sec_email');
			$table->string('sec_phone');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('fax');
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
		Schema::drop('firm_list');
	}

}