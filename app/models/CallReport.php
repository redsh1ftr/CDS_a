<?php

class CallReport extends Eloquent {


	protected $fillable = array('business_name', 'phone', 'answered', 'office_manager', 'email', 'hours', 'call_notes');
	protected $table = 'call_log' $orderby = 'phone'
}