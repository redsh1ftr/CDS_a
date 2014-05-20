<?php

class CompanyDefault extends Eloquent {


	protected $fillable = array(
		'street1',
		'street2', 
		'city', 
		'state',
		'zip',
		'phone',
		'fax',
		'records_email',
		'info_email',
		'accounting_email',
		'statutory_update',
		'subp_fee',
		'stat_base',
		'stat_1-20',
		'stat_21-50',
		'stat_50',
		'healthport_cd',
		'digital_pages',
		'shipped_cd',
		'healthport_nrs',
		'iod_nrs',
		);
	
	protected $table = 'company_defaults';
}