<?php

use Illuminate\Database\Migrations\Migration;

class CreateServices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('services_list', function($table){
			$table->increments('id');
			$table->string('type');
			$table->string('location');
			$table->string('problem');
			$table->string('specific_problem');
			$table->longtext('service_notes');			
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