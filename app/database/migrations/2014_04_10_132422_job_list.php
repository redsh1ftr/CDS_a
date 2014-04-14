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
			$table->string('job_number');
			$table->string('request_received');
			$table->string('request_entered');
			$table->string('user_entered_id');
			$table->string('status');
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