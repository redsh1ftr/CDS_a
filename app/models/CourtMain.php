<?php

class CourtMain extends Eloquent {

	protected $fillable = array(
		'name',
		'type', 
		'court_number', 
		'street1',
		'street2',
		'county',
		'city',
		'state',
		'zip',
		'phone',
		'fax',
		'info',
		 );
	protected $table = 'court_list';
}