<?php

class CallLogFollowup extends Eloquent {


	protected $fillable = array('call_id', 'notes');
	protected $table = 'call_log_followup';
}