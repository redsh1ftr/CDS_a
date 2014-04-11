<?php

class CaseController extends BaseController {

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


public function case_list(){

return View::make('main.hello',  array('pagetitle', 'Client Hub'));
}

public function create_new_case(){
	CaseMain::create(array(
		'case_number' => Input::get('case_number'),
		'date_received' => Input::get('date_received'),
		'date_entered' => Input::get('date_entered'),
		'user_entered_id' => Input::get('user_entered_id'),
		'discovery_date' => Input::get('discovery_date'),
		'court_id' => Input::get('court_id'),
		'judge' => Input::get('judge'),
		'file_number' => Input::get('file_number'),
		'claim_number' => Input::get('claim_number'),
		'plaintiff' => Input::get('plaintiff'),
		'defendant' => Input::get('defendant'),
		'caption' => Input::get('caption'),
		'status' => Input::get('status'),
		'info' => Input::get('info'),
		));

return Redirect::route('case_home');


return View::make('case.new_case',  array('pagetitle', 'Create Case'));



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