<?php

use Illuminate\Database\Migrations\Migration;

class RecordPrices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('record_prices', function($table){
			$table->increments('id');
			$table->string('type');
			$table->string('price');
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
		Schema::drop('record_prices');
	}

}