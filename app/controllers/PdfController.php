<?php

class PdfController extends BaseController {

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


public function make_pdf($id){
return View::make('pdfs.example.download',  array())
->with('id', $id);
}



public function create_new_attorney(){
$user_id = Cache::get('username');	
	AttorneyMain::create(array(
		'firm_id' => Input::get('firm_id'),
		'p_number' => Input::get('p_number'),
		'title' => Input::get('title'),
		'first_name' => Input::get('first_name'),
		'middle_name' => Input::get('middle_name'),
		'last_name' => Input::get('last_name'),
		'atty_email' => Input::get('atty_email'),
		'atty_phone' => Input::get('atty_phone'),
		'atty_fax' => Input::get('atty_fax'),
		'sec_first' => Input::get('sec_first'),
		'sec_middle' => Input::get('sec_middle'),
		'sec_last' => Input::get('sec_last'),
		'sec_email' => Input::get('sec_email'),
		'sec_phone' => Input::get('sec_phone'),
		'sec_fax' => Input::get('sec_fax'),
		'info' => Input::get('info'),
		'created_user' => Cache::get('user_id'),
		'updated_user' => Cache::get('user_id'),
		));
return Redirect::route('firm_list');

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
		'created_user' => Cache::get('user_id'),
		'updated_user' => Cache::get('user_id'),
		));

return Redirect::route('firm_list');

}

public function new_firm(){
return View::make('attorneys.create_new_firm',  array())
->with('pagetitle', 'New Firm');
}

public function selected_firm($id){

return View::make('attorneys.create_new_attorney',  array())
->with('pagetitle', 'New Attorney')
->with('firm_list1', FirmMain::where('id', '=', $id)->get())
->with('firm_id', FirmMain::where('id', '=', $id)->pluck('id'))
->with('user_id', Cache::get('user_id'));

}

public function firm_profile($id){
return View::make('attorneys.firm_profile',  array())
->with('firm_list1', FirmMain::Where('id', '=', $id)->get())
->with('pagetitle', FirmMain::Find($id)->pluck('name'))
->with('attorney_list1', AttorneyMain::where('firm_id', '=', $id)->get());

}

public function attorney_profile($id){
$firm_id = AttorneyMain::where('id', '=', $id)->pluck('firm_id');
return View::make('attorneys.attorney_profile',  array())
->with('firm_lists', FirmMain::where('id', '=', $firm_id)->get())
->with('attorney_list1', AttorneyMain::Where('id', '=', $id)->get())
->with('pagetitle', AttorneyMain::Find($id)->pluck('p_number'))
->with('case_list_open', CaseMain::where('status', '=', 'Open')->orderBy('updated_at', 'desc')->get())
->with('case_list_closed', CaseMain::where('status', '!=', 'Open')->orderBy('updated_at', 'desc')->get())
;


}



public function firm_selection(){

return View::make('attorneys.select_firm',  array())
->with('pagetitle', 'New Attorney')
->with('firm_list1', FirmMain::orderBy('created_at')->get());

}


}