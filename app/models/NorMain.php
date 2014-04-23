<?php

class NorMain extends Eloquent {

	protected $fillable = array(
		'case_id',
		'id',
		'first_name',
		'middle_name',
		'last_name',
		'dob',
		'ssn',
		'email',
		'phone',
		'street1',
		'street2',
		'city',
		'state',
		'zip',
		'info',
		'created_user',
		'updated_user',
		 );
	
	protected $table = 'nor_list';
}