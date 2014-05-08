<?php

use Illuminate\Database\Migrations\Migration;

class ShipPrices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ship_prices', function($table){
			$table->increments('id');
			$table->string('ship_type');
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
		Schema::drop('ship_prices');
	}

}