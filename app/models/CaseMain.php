<?php

class CaseMain extends Eloquent {


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
		'caption',
		'status',
		'info',
		'created_user',
		'updated_user',
		 );
	
	protected $table = 'case_list';
}