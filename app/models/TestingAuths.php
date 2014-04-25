<?php

class TestingAuths extends Eloquent {

	protected $fillable = array(
		'case_id',
		'side', 
		'person', 
		'p_number',
		'created_user',
		'updated_user',
		'nor',
		 );
	
	protected $table = 'auth_maker';
}