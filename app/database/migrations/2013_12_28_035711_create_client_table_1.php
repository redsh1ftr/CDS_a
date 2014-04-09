<?php

use Illuminate\Database\Migrations\Migration;

class CreateClientTable1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_list', function($table){
			$table->increments('id');
			$table->integer('client_id');
			$table->string('business_name');
			$table->string('office_manager');
			$table->string('net_terms');
			$table->integer('work_order_number');
			$table->string('hours');
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
		Schema::drop('client_list_1');
	}

}