<?php

use Illuminate\Database\Migrations\Migration;

class AddClientIndexData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('billing_index')->insert(array(
			'id' => '1',
			'client_id' => '4050',
			'billing_id' => '1'));

		DB::table('billing_index')->insert(array(
			'id' => '2',
			'client_id' => '4050',
			'billing_id' => '2'));
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