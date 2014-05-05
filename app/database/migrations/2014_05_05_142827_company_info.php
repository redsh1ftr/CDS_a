<?php

use Illuminate\Database\Migrations\Migration;

class CompanyInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_info', function($table){
			$table->increments('id');
			$table->string('street1');
			$table->string('street2');
			$table->string('phone');
			$table->string('fax');
			$table->string('records_email');
			$table->string('accounting_email');
			$table->string('info_email');
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
	Schema::drop('company_info');
	}

}