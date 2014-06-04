<?php

class FormController extends BaseController {

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




public function status_letter($id){

return View::make('forms.status_letter',  array())
->with('pagetitle', 'Status Letter')
->with('job', JobMain::where('id', '=', $id)->first());
}


}