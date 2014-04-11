<?php

use Illuminate\Database\Migrations\Migration;

class CaseList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_list', function($table){
			$table->increments('id');
			$table->string('case_number');
			$table->string('date_received');
			$table->string('date_entered');
			$table->string('user_entered_id');
			$table->string('discovery_date');
			$table->string('court_id');
			$table->string('judge');
			$table->string('file_number');
			$table->string('claim_number');
			$table->string('plaintiff');
			$table->string('defendant');
			$table->string('caption');
			$table->string('status');
			$table->longtext('info');
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
		Schema::drop('case_list');
	}

}