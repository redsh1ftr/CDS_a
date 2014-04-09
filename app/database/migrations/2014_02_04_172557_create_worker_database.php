<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorkerDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('workers', function($table){
			$table->increments('id');
			$table->string('worker_name');
			$table->string('title');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone_number');
			$table->string('email');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->integer('zip');
			$table->text('availability');
			$table->integer('hourly_rate');
			$table->text('work_orders');
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
		//
	}

}