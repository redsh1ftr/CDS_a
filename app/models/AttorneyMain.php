<?php

class AttorneyMain extends Eloquent {


	protected $fillable = array(
		'case_number',
		'date_received', 
		'date_entered', 
		'request_entered',
		'user_entered_id',
		'discovery_date',
		'court_id',
		'judge',
		'file_number',
		'claim_number',
		'plaintiff',
		'defendant',
		'caption',
		'status',
		'info',
		 );
	
	protected $table = 'attorney_list';
}