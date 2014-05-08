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
			$table->string('pages');
			$table->string('pages_price');
			$table->string('films');
			$table->string('films_price');
			$table->string('discs');
			$table->string('discs_price');
			$table->string('microfiche');
			$table->string('microfiche_price');
			$table->string('colorpages');
			$table->string('colorpages_price');
			$table->string('dental_films');
			$table->string('dental_films_price');
			$table->string('audio');
			$table->string('audio_price');
			$table->string('other');
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