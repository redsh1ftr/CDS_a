<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorkOrderList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_order_list', function($table){
			$table->increments('id');
			$table->string('work_order_number');
			$table->integer('service_counter');
			$table->integer('client_id');
			$table->integer('worksite_id');
			$table->integer('billing_id');
			$table->integer('worker_id');
			$table->string('billable_hours');
			$table->string('billable_rate');
			$table->string('status');
			$table->string('work_complete_date');
			$table->string('po_number');
			$table->longtext('notes');
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
		Schema::drop('work_order_list');
	}

}