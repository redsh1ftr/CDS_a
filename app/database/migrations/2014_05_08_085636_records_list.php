<?php

use Illuminate\Database\Migrations\Migration;

class RecordsList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records_list', function($table){
			$table->increments('id');
			$table->string('job_id');
			$table->string('user_id');
			$table->string('billsheet_id');
			$table->string('invoice_id');
			$table->datetime('received');
			$table->string('type');
			$table->string('quantity');
			$table->string('info');
			$table->string('created_user')
			$table->string('updated_user')
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
		Schema::drop('records_list');
	}

}