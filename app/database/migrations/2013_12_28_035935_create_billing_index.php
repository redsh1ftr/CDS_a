<?php

use Illuminate\Database\Migrations\Migration;

class CreateBillingIndex extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billing_index', function($table){
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('billing_id');
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
		Schema::drop('billing_index');

	}

}