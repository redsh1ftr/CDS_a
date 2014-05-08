<?php

use Illuminate\Database\Migrations\Migration;

class InvoiceList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_list', function($table){
			$table->increments('id');
			$table->string('job_id');
			$table->string('user_id');
			$table->string('billsheet_id');
			$table->string('invoice_amount');
			$table->string('invoice_number');
			$table->string('void');
			$table->string('info');
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
		Schema::drop('invoice_list');
	}

}