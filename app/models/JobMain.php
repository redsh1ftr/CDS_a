<?php

class JobMain extends Eloquent {


	protected $fillable = array(
		'case_id',
		'deponent_id',
		'requester_id',
		'nor_id',
		'job_number', 
		'request_received', 
		'rush',
		'hold',
		'films',
		'status',
		'type',
		'need_auth',
		'need_info',
		'served',
		'records_due',
		'info',
		'created_user',
		'updated_user',
		 );
	protected $table = 'job_list';
}