<?php

class CourtController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $restful = true;


public function court_list(){

return View::make('main.hello',  array('pagetitle', 'Create'));
}

public function create_new_court(){
	CaseMain::create(array(
		'type' => Input::get('type'),
		'court_number' => Input::get('court_number'),
		'street1' => Input::get('street1'),
		'street2' => Input::get('street2'),
		'county' => Input::get('county'),
		'city' => Input::get('city'),
		'state' => Input::get('state'),
		'zip' => Input::get('zip'),
		'phone' => Input::get('phone'),
		'fax' => Input::get('fax'),
		'info' => Input::get('info'),
		));

return Redirect::route('court_list');



}

}



public function addcall(){
	CallLog::create(array(
		'business_name' => Input::get('business_name'),
		'street' => Input::get('street'),
		'city' => Input::get('city'),
		'zip' => Input::get('zip'),
		'phone' => Input::get('phone'),
		'answered' => Input::get('answered'),
		'office_manager' => Input::get('office_manager'),
		'email' => Input::get('email'),
		'hours' => Input::get('hours'),
		'call_notes' => Input::get('call_notes'),
		));
	return Redirect::route('callhome');
}