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

return View::make('cases.case_list',  array('pagetitle', 'Create'))
->with('case_list1', CaseMain::orderBy('created_at')->get());
}

public function create_new_case(){
	CaseMain::create(array(
		'case_number' => Input::get('case_number'),
		'date_received' => Input::get('date_received'),
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

}

public function court_selection(){

return View::make('cases.select_court',  array('pagetitle', 'Case Hub'))
->with('court_list1', CourtMain::orderBy('created_at')->get());

}

public function selected_court($id){

return View::make('cases.create_new_case',  array('pagetitle', 'Create'))
->with('court_list1', CourtMain::where('id', '=', $id)->get())
->with('court_id', CourtMain::where('id', '=', $id)->pluck('id'));

}

public function case_profile($id){
$court_id = CaseMain::Where('id', '=', $id)->pluck('court_id');

return View::make('cases.profile',  array('pagetitle', 'Create'))
->with('case_list1', CaseMain::Where('id', '=', $id)->get())
->with('court_info1', CourtMain::Where('id', '=', $court_id)->get());

}



}