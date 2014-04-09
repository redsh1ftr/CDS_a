<?php

use Illuminate\Database\Migrations\Migration;

class AddServicesData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('services_list')->insert(array(
			'id' => '1',
			'type' => 'Residential',
			'location' => 'Kitchen',
			'problem' => 'Cabinet',
			'specific_problem' => 'Door Hinge',
			'service_notes' => 'Describe in detail exactly where the problem was and how you fixed it, IE top right hinge, WD40.'


		));
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