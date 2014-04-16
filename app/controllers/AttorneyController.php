<?php

class AttorneyController extends BaseController {

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


public function firm_list(){

return View::make('attorneys.firm_list',  array('pagetitle', 'Create'))
->with('firm_list1', FirmMain::orderBy('created_at')->get());
}



public function create_new_firm(){
	FirmMain::create(array(
		'name' => Input::get('name'),
		'street1' => Input::get('street1'),
		'street2' => Input::get('street2'),
		'city' => Input::get('city'),
		'state' => Input::get('state'),
		'zip' => Input::get('zip'),
		'phone' => Input::get('phone'),
		'fax' => Input::get('fax'),
		'office_manager' => Input::get('office_manager'),
		'manager_phone' => Input::get('manager_phone'),
		'manager_email' => Input::get('manager_email'),
		'info' => Input::get('info'),
		'created_user' => Input::get('created_user'),
		'updated_user' => Input::get('updated_user'),
		));

return Redirect::route('firm_list');

}

public function new_firm(){
return View::make('attorneys.create_new_firm',  array('pagetitle', 'New Firm'));
}

public function selected_court($id){

return View::make('cases.create_new_case',  array('pagetitle', 'Create'))
->with('court_list1', CourtMain::where('id', '=', $id)->get())
->with('court_id', CourtMain::where('id', '=', $id)->pluck('id'));

}

public function firm_profile($id){
return View::make('attorneys.firm_profile',  array('pagetitle', 'AttnyName'))
->with('firm_list1', FirmMain::Where('id', '=', $id)->get());
}



}