<?php

use Illuminate\Database\Migrations\Migration;

class JobList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_list', function($table){
			$table->increments('id');
			$table->string('case_id');
			$table->string('deponent_id');
			$table->string('requester_id');
			$table->string('nor_id');
			$table->string('job_number');
			$table->string('request_received');
			$table->string('rush');
			$table->string('hold');
			$table->string('films');
			$table->string('status');
			$table->string('type');
			$table->string('need_auth');
			$table->string('need_info');
			$table->string('served');
			$table->string('records_due');
			$table->longtext('info');
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
		Schema::drop('job_list');	
	}

}