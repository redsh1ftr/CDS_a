<?php

use Illuminate\Database\Migrations\Migration;


class AddUserData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'id' => '1700',
			'username' => 'jtava01',
			'password' => 'RSzSHAzzzHdzsgfT124Rhatrhijpj43wtrWE532Gehr',
			'worker_id' => '100',));


				DB::table('users')->insert(array(
			'id' => '1701',
			'username' => 'zdkroot01',
			'password' => 'RSzSHAzzzHdzsgfT124Rhatrhijpj43wtrWE532Gehr',
			'worker_id' => '101',));

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