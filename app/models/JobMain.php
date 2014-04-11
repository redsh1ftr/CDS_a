<?php

class JobMain extends Eloquent {


	protected $fillable = array(
		'case_id',
		'job_number', 
		'request_received', 
		'request_entered',
		'user_entered_id',
		'status',
		'info',
		 );
	protected $table = 'job_list';
}