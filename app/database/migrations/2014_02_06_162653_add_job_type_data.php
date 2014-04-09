<?php

use Illuminate\Database\Migrations\Migration;

class AddJobTypeData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('job_type_count')->insert(array(
			'id' => '1',
			'job_type' => 'Cleaning',
			'job_type_number' => '2000'));

		DB::table('job_type_count')->insert(array(
			'id' => '2',
			'job_type' => 'Interior Maintenance',
			'job_type_number' => '5000'));


		DB::table('job_type_count')->insert(array(
			'id' => '3',
			'job_type' => 'Exterior Maintenance',
			'job_type_number' => '9000'));
	
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