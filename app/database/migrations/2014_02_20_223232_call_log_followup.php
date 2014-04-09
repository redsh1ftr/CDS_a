<?php

use Illuminate\Database\Migrations\Migration;

class CallLogFollowup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('call_log_followup', function($table){
			$table->increments('id');
			$table->string('call_id');
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
		//
	}

}