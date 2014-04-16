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

return View::make('courts.court_list',  array('pagetitle', 'Create'))
->with('court_list1', CourtMain::orderBy('created_at')->get());
}

public function create_new_court(){
	CourtMain::create(array(
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

public function new_court(){

return View::make('courts.create_new_court',  array('pagetitle', 'Create'));

}

public function court_profile($id){

return View::make('courts.profile',  array('pagetitle', 'Create'))
->with('court_list1', CourtMain::where('id', '=', $id)->get());


}

public function court_hub(){

return View::make('courts.court_hub',  array('pagetitle', 'Court Hub'));

}


}