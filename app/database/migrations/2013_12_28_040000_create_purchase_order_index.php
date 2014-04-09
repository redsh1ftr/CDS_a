<?php

use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderIndex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_order_index', function($table){
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('worker_id');
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
			Schema::drop('purchase_order_index');
	}

}