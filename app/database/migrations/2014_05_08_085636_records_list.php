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
			$table->string('billsheet_id');
			$table->datetime('received');
			$table->string('type');
			$table->integer('quantity');
			$table->string('info');
			$table->datetime('ship_date')->nullable();
			$table->integer('shipped')->nullable();
			$table->string('created_user');
			$table->string('updated_user');
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