<?php

class RecordsMain extends Eloquent {

	protected $fillable = array(
		'job_id',
		'user_id',
		'type',
		'quantity',
		'invoice_id',
		'billsheet_id',
		'recieved',
		'info',
		'created_user',
		'updated_user',
		 );
	
	protected $table = 'records_list';
}