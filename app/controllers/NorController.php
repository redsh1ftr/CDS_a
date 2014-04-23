<?php

class NorController extends BaseController {

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



public function nor_profile($id){

if (NorMain::find($id)){
return View::make('cases.nor_profile',  array())
->with('pagetitle', 'NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor1', NorMain::find($id));}

return View::make('cases.create_new_nor',  array())
->with('pagetitle', 'Create NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor_id', $id);
}



public function create_new_nor(){
$id = Input::get('nor_id');
if(NorMain::find($id))
{
return View::make('cases.nor_profile',  array())
->with('pagetitle', 'NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor1', NorMain::find($id));
}


$user_id = Cache::get('username');	
	NorMain::create(array(
		'id' => Input::get('nor_id'),
		'case_id' => Input::get('case_id'),
		'first_name' => Input::get('first_name'),
		'first_name' => Input::get('first_name'),
		'middle_name' => Input::get('middle_name'),
		'last_name' => Input::get('last_name'),
		'dob' => Input::get('dob'),
		'ssn' => Input::get('ssn'),
		'email' => Input::get('email'),
		'phone' => Input::get('phone'),
		'street1' => Input::get('street1'),
		'street2' => Input::get('street2'),
		'city' => Input::get('city'),
		'state' => Input::get('state'),
		'zip' => Input::get('zip'),
		'info' => Input::get('info'),
		'created_user' => Cache::get('user_id'),
		'updated_user' => Cache::get('user_id'),
		));

return View::make('cases.nor_profile',  array())
->with('pagetitle', 'NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor1', NorMain::find($id));}

	}
