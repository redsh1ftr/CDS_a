<?php

class CallLog extends Eloquent {


	protected $fillable = array('business_name', 'street', 'city', 'zip', 'phone', 'answered', 'office_manager', 'email', 'hours', 'call_notes');
	protected $table = 'call_log';
}