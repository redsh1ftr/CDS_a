<?php

class WorkerController extends BaseController {

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

	public function logout() {
		Session::forget('user_id');
		return View::make('main.hello');
	}


	public function login_home() {
		Session::put('user_id', Input::get('username'));
		return View::make('cases.case_list',  array())
		->with('pagetitle', 'Case List')
		->with('case_list1', CaseMain::orderBy('updated_at')->get());
	}
}