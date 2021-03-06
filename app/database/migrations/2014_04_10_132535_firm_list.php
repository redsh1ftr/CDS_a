<?php

use Illuminate\Database\Migrations\Migration;

class FirmList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('firm_list', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('phone');
			$table->string('fax');
			$table->string('office_manager');
			$table->string('manager_phone');
			$table->string('manager_email');
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