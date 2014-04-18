<?php

class FirmMain extends Eloquent {


	protected $fillable = array(
		'name',
		'street1', 
		'street2', 
		'city',
		'state',
		'zip',
		'phone',
		'fax',
		'office_manager',
		'manager_phone',
		'manager_email',
		'info',
		'created_user',
		'updated_user',
		 );
	
	protected $table = 'firm_list';
}