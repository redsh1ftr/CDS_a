<?php

use Illuminate\Database\Migrations\Migration;

class CaseAttorney extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('case_attorney', function($table){
			$table->increments('id');
			$table->string('case_id');
			$table->string('side');
			$table->string('person')->nullable();
			$table->string('attorney_id')->nullable();
			$table->integer('nor')->nullable();
			$table->integer('active')->nullable();
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
		Schema::drop('case_attorney');
	}

}