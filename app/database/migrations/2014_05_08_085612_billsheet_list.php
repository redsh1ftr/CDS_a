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
			$table->string('page_count');
			$table->string('page_price');
			$table->string('film_count');
			$table->string('film_price');
			$table->string('disc_count');
			$table->string('disc_price');
			$table->string('micro_count');
			$table->string('micro_price');
			$table->string('color_count');
			$table->string('color_price');
			$table->string('dental_count');
			$table->string('dental_price');
			$table->string('audio_count');
			$table->string('audio_price');
			$table->string('subp_cost');
			$table->string('witness_fee');
			$table->string('onsite_copy');
			$table->string('shipping_handling');
			$table->string('nrs');
			$table->string('case_settled');
			$table->string('job_cancelled');
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