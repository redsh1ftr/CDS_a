<?php

class Case1Attorney extends Eloquent {

	protected $fillable = array(
		'case_id',
		'side', 
		'person', 
		'attorney_id',
		'created_user',
		'updated_user',
		'nor',
		 );
	
	protected $table = 'case_attorney';
}