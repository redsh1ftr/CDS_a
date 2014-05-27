<?php

use Illuminate\Database\Migrations\Migration;

class CompanyDefaults extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	
	{
		Schema::create('company_defaults', function($table){
			$table->increments('id');
			$table->string('server_address');
			$table->string('street1');
			$table->string('street2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('phone');
			$table->string('fax');
			$table->string('records_email');
			$table->string('info_email');
			$table->string('accounting_email');
			$table->datetime('statutory_update');
			$table->string('subp_fee');
			$table->string('stat_base');
			$table->string('stat_1-20');
			$table->string('stat_21-50');
			$table->string('stat_50');
			$table->string('healthport_cd');
			$table->string('digital_pages');
			$table->string('shipped_cd');
			$table->string('healthport_nrs');
			$table->string('iod_nrs');
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
		Schema::drop('company_defaults');
	}

}