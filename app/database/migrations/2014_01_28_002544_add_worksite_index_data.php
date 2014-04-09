<?php

use Illuminate\Database\Migrations\Migration;

class AddWorksiteIndexData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('worksite_index')->insert(array(
			'id' => '1',
			'client_id' => '4050',
			'worksite_id' => '11'));

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