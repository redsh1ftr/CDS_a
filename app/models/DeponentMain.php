<?php

class DeponentMain extends Eloquent {

	protected $fillable = array(
		'name',
		'street1',
		'street2',
		'city', 
		'state',
		'zip',
		'type',
		'contact',
		'phone',
		'fax',
		'email',
		'fee',
		'films',
		'copy_service',
		'info',
		'active',
		'created_user',
		'updated_user',
		 );
	
	protected $table = 'deponent_list';
}