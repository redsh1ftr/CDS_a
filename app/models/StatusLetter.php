<?php

class StatusLetter extends Eloquent {

	protected $fillable = array(
		'name',
		'verbiage',
		'response',
		 );
	
	protected $table = 'status_letters';
}