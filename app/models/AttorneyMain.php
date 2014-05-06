<?php

class AttorneyMain extends Eloquent {

	protected $fillable = array(
		'firm_id',
		'p_number', 
		'title', 
		'first_name',
		'middle_name',
		'last_name',
		'atty_email',
		'atty_phone',
		'atty_fax',
		'sec_first',
		'sec_middle',
		'sec_last',
		'sec_email',
		'sec_phone',
		'sec_fax',
		'info',
		'shipping',
		'preference',
		'created_user',
		'updated_user',
		 );
	
	protected $table = 'attorney_list';
}