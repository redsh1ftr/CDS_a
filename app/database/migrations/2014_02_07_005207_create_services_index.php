<?php

use Illuminate\Database\Migrations\Migration;

class CreateServicesIndex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		Schema::create('services_work_order_index', function($table){
			$table->increments('id');
			$table->integer('work_order_id');
			$table->integer('service_number');
			$table->integer('service');
			$table->string('time_in');
			$table->string('time_out');
			$table->integer('service_notes');
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