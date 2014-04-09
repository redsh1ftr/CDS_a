<?php

class Client extends Eloquent {



			$table->integer('client_id');
			$table->string('business_name');
			$table->string('net_terms');
			$table->integer('work_order_number');
			$table->string('hours');


	protected $fillable = array('client_id', 'business_name', 'net_terms', 'work_order_number', 'hours',);
	protected $table = 'client_list';
}