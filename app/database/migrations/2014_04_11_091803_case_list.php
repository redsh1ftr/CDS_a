<?php

use Illuminate\Database\Migrations\Migration;

class CaseList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_list', function($table){
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('case_number');
			$table->datetime('date_received');
			$table->datetime('discovery_date');
			$table->string('court_id');
			$table->string('judge');
			$table->string('file_number');
			$table->string('claim_number');
			$table->string('caption');
			$table->string('status');
			$table->longtext('info');
			$table->string('created_user');
			$table->string('updated_user');
			$table->timestamps();

		});

		DB::statement('ALTER TABLE case_list ADD FULLTEXT search(case_number, court_id, judge, file_number, claim_number, status, info, created_user, updated_user)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('case_list');
	}

}