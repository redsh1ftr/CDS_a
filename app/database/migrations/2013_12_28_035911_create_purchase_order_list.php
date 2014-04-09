<?php

use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_order_list', function($table){
			$table->increments('id');
			$table->string('status');
			$table->string('purchase_order_number');
			$table->string('work_order_number');
			$table->integer('client_id');
			$table->integer('worksite_id');
			$table->integer('billing_id');
			$table->integer('worker_id');
			$table->string('warehouse');
			$table->string('purchase_order_status');
			$table->string('purchase_order_notes');
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
		Schema::drop('purchase_order_list');
	}

}