<?php

use Illuminate\Database\Migrations\Migration;

class CreateJobTypeCounter1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_type_count', function($table){
			$table->increments('id');
			$table->string('job_type');
			$table->integer('job_type_number');
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
		Schema::drop('job_type_count');
	}

}