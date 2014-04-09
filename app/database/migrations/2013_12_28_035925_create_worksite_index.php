<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorksiteIndex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('worksite_index', function($table){
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('worksite_id');
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
		Schema::drop('worksite_index');
	}

}