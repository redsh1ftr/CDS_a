<?php

class MarketingController extends BaseController {

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


public function callprofile(){

return View::make('marketing.call_log',  array('pagetitle', 'Call Log'))
	->with('call_list1', CallLog::get());


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

public function followupcall($id){
//get the ID
	//$checkid = DB::table('call_log')->where('id', '=', $client_id)->pluck('id');
CallLog::create(array(
	'business_name' => Input::get('notes'),
	'notes' => Input::get($id),
	));
	return Redirect::route('callhome');
}

public function callreport(){

return View::make('marketing.call_display',  array('pagetitle', 'Call Report'))
	->with('call_list1', CallLog::orderBy('created_at')->get());

}


public function callfollowupnotes($id){
return View::make('marketing.call_followup',  array('pagetitle', 'Call Report'))
	->with('call_list1', CallLog::where('id', '=', $id)->get());
	//->with('followup1', CallLogfollowup::where('call_id', '=', $id)->get());
}


}