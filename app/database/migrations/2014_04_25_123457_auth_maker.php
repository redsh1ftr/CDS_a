<?php

use Illuminate\Database\Migrations\Migration;

class AuthMaker extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('auth_maker', function($table){
			$table->increments('id');
			$table->string('auth_name');
			$table->string('field1_name');
			$table->string('field1_data');
			$table->string('field2_name');
			$table->string('field2_data');
			$table->string('field3_name');
			$table->string('field3_data');
			$table->string('field4_name');
			$table->string('field4_data');
			$table->string('field5_name');
			$table->string('field5_data');
			$table->string('field6_name');
			$table->string('field6_data');
			$table->string('field7_name');				
			$table->string('field7_data');
			$table->string('field8_name');
			$table->string('field8_data');
			$table->string('field9_name');
			$table->string('field9_data');
			$table->string('field10_name');
			$table->string('field10_data');
			$table->string('field11_name');
			$table->string('field11_data');
			$table->string('field12_name');
			$table->string('field12_data');
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
		Schema::drop('auth_maker');
	}

}