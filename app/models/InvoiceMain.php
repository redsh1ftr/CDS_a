<?php

class InvoiceMain extends Eloquent {


	protected $fillable = array(
		'job_id',
		'user_id',
		'received',
		'invoice_number',
		'invoice_amount', 
		'info',
		'payment',
		'paid',
		'created_user',
		'updated_user',
		'type'
		 );
	protected $table = 'invoice_list';
}	


