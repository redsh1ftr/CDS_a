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


if (NorModel::where('nor_id', '=', $id)->first()){
return View::make('cases.nor_profile',  array())
->with('pagetitle', 'NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('ssa_auth', TestingAuths::where('id', '=', '1')->get())
->with('nor1', NorModel::where('nor_id', '=', $id)->get());}

return View::make('cases.create_new_nor',  array())
->with('pagetitle', 'Create NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor_id', $id);
}




public function create_new_nor(){
$id = Input::get('nor_id');
if(NorModel::find($id))
{
return View::make('cases.nor_profile',  array())
->with('pagetitle', 'NOR')
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor1', NorModel::where('nor_id', '=', $id));
}

{
$user_id = Session::get('username');	
	NorModel::create(array(
		'nor_id' => Input::get('nor_id'),
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
		'created_user' => Session::get('user_id'),
		'updated_user' => Session::get('user_id'),
		));

return View::make('cases.nor_profile',  array())
->with('pagetitle', 'NOR')
->with('ssa_auth', TestingAuths::where('id', '=', '1')->get())
->with('attorney_case', Case1Attorney::where('id', '=', $id)->get())
->with('nor1', NorModel::where('nor_id', '=', $id)->get());

	}

}

}

