<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorkOrderIndex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_order_index', function($table){
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('work_order_id');
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
		Schema::drop('work_order_index');
	}

}