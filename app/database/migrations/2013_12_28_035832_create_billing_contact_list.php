<?php

use Illuminate\Database\Migrations\Migration;

class CreateBillingContactList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_contact_list', function($table){
			$table->increments('id');
			$table->string('billing_company');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('hours');
			$table->string('phone_number');
			$table->string('fax_number');
			$table->string('email');
			$table->longtext('notes');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
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
		Schema::drop('billing_contact_list');
	}

}