<?php

class InvoiceMain extends Eloquent {


	protected $fillable = array(
		'job_id',
		'user_id',
		'received',
		'invoice_number',
		'invoice_amount', 
		'info',
		'created_user',
		'updated_user',
		 );
	protected $table = 'invoice_list';
}	


