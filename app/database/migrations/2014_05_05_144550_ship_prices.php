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
			$table->string('tier1');
			$table->string('tier1_price');
			$table->string('tier2');
			$table->string('tier2_price');
			$table->string('tier3');
			$table->string('tier3_price');
			$table->string('tier4');
			$table->string('tier4_price');
			$table->string('tier5');
			$table->string('tier5_price');
			$table->string('tier6');
			$table->string('tier6_price');
			$table->string('tier7');
			$table->string('tier7_price');
			$table->string('tier8');
			$table->string('tier8_price');
			$table->string('tier9');
			$table->string('tier9_price');
			$table->string('tier10');
			$table->string('tier10_price');
			$table->string('tier11');
			$table->string('tier11_price');
			$table->string('tier12');
			$table->string('tier12_price');
			$table->string('tier13');
			$table->string('tier13_price');
			$table->string('tier14');
			$table->string('tier14_price');
			$table->string('tier15');
			$table->string('tier15_price');
			$table->string('tier16');
			$table->string('tier16_price');
			$table->string('tier17');
			$table->string('tier17_price');
			$table->string('tier18');
			$table->string('tier18_price');
			$table->string('tier19');
			$table->string('tier19_price');
			$table->string('tier20');
			$table->string('tier20_price');
			$table->string('requester_price');
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