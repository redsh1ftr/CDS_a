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
$jid = json_decode($id);
return View::make('forms.status_letter',  array())
->with('pagetitle', 'Status Letter')
->with('job', JobMain::where('id', '=', $jid->jid)->first())
->with('status', StatusLetter::where('id', '=', $jid->lid)->first())
->with('sts', DB::table('status_letters')->where('id', '=', $jid->lid)->pluck('verbiage'))
->with('dep', 'THIS IS A TEST');
}

public function select_form($id){
return View::make('forms.select_form',  array())
->with('pagetitle', 'Select_Form')
->with('job', $id)
->with('status', StatusLetter::orderBy('name', 'desc')->get());
}

public function make_status_letterShow(){

return View::make('forms.create_status_letter',  array())
->with('pagetitle', 'Create Status Letter')
->with('stat', StatusLetter::where('id', '=', 1)->first());
}


public function make_status_letterDo(){	
	StatusLetter::create(array(
		'name' => Input::get('name'),
		'verbiage' => Input::get('verbiage'),
		'response' => Input::get('response'),
		));

return Redirect::route('make_status_letter');
}


}

