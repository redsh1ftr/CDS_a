<?php

use Illuminate\Database\Migrations\Migration;

class BillsheetList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billsheet_list', function($table){
			$table->increments('id');
			$table->string('job_id');
			$table->datetime('ship_date');
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
		Schema::drop('billsheet_list');
	}

}