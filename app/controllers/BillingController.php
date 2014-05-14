<?php

class BillingController extends BaseController {

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

public function check_in_records($id){
return View::make('billings.check_in_records',  array())
->with('rec_type1', RecTypeMain::lists('type'))
->with('pagetitle', JobMain::where('id', '=', $id)->pluck('job_number'))
->with('case_list1', CaseMain::where('id', '=', JobMain::where('id', '=', $id)->pluck('case_id'))->first())
->with('job_list1', JobMain::where('id', '=', $id)->first());
}


public function add_records(){
$date = Carbon::parse(Input::get('test'));	
	RecordsMain::create(array(
		'job_id' => Input::get('job_id'),
		'user_id' => Session::get('user_id'),
		'recieved' => $date,
		'type' => Input::get('type'),
		'quantity' => Input::get('quantity'),
		'created_user' => Session::get('user_id'),
		'updated_user' => Session::get('user_id'),
		));
if (Input::get('with_invoice'))	{
return Redirect::route('check_in_invoice', array('id' => Input::get('job_id')));
}

{
return Redirect::route('job_profile', array('id' => Input::get('job_id')));
}
}

public function check_in_invoice($id){
return View::make('billings.check_in_invoice',  array())
->with('rec_type1', RecTypeMain::lists('type'))
->with('pagetitle', JobMain::where('id', '=', $id)->pluck('job_number'))
->with('case_list1', CaseMain::where('id', '=', JobMain::where('id', '=', $id)->pluck('case_id'))->first())
->with('job_list1', JobMain::where('id', '=', $id)->first());
}


public function case_list(){

return View::make('cases.case_list',  array())
->with('pagetitle', 'Case List')
->with('case_list1', CaseMain::orderBy('updated_at', 'desc')->get());
}

public function case_list_sort(){
$sort = Input::get('sort');
return View::make('cases.case_list',  array())
->with('pagetitle', 'Case List')
->with('case_list1', CaseMain::where('status', '=', $sort)->get());

}

public function create_new_case(){
	CaseMain::create(array(
		'case_number' => Input::get('case_number'),
		'date_received' => Input::get('date_received'),
		'discovery_date' => Input::get('discovery_date'),
		'court_id' => Input::get('court_id'),
		'judge' => Input::get('judge'),
		'file_number' => Input::get('file_number'),
		'claim_number' => Input::get('claim_number'),
		'caption' => Input::get('caption'),
		'status' => 'Open',
		'info' => Input::get('info'),
		'created_user' => Session::get('user_id'),
		'updated_user' => Session::get('user_id'),
		));

return Redirect::route('case_list');

}

public function change_status(){
$case_status_id = Input::get('case_status_id');
$date = new \DateTime;
if(Input::get('status') != 'Error') {
DB::table('case_list')->where('id', '=', $case_status_id)->update(array('status' => Input::get('status'), 'updated_at' => $date, 'updated_user' => Session::get('user_id')));
return View::make('cases.case_list',  array())
->with('pagetitle', 'Case List')
->with('case_list1', CaseMain::orderBy('updated_at', 'desc')->get());
}
return Redirect::route('case_list');
}

public function court_selection(){
return View::make('cases.select_court',  array())
->with('pagetitle', 'New Case')
->with('court_list1', CourtMain::orderBy('created_at')->get());

}

public function selected_court($id){
return View::make('cases.create_new_case',  array())
->with('court_list1', CourtMain::where('id', '=', $id)->get())
->with('pagetitle', 'New Case')
->with('court_id', CourtMain::where('id', '=', $id)->pluck('id'));

}

public function case_profile($id){
$court_id = CaseMain::Where('id', '=', $id)->pluck('court_id');
$case_info = CaseMain::Where('id', '=', $id);
$plaintiff = Case1Attorney::where('case_id', '=', $id)->where('side', '=', 'Plaintiff')->get();
$defendant = Case1Attorney::where('case_id', '=', $id)->where('side', '=', 'Defendant')->get();
return View::make('cases.profile',  array())
->with('case_list1', $case_info->get())
->with('pagetitle', $case_info->pluck('caption'))
->with('court_info1', CourtMain::Where('id', '=', $court_id)->get())
->with('plaintiff1', $plaintiff)
->with('defendant1', $defendant)
->with('depname', JobMain::where('case_id', '=', $id)->lists('deponent_id'))
->with('job', JobMain::where('case_id', '=', $id)->get());
}

public function case_update($id){
$court_id = CaseMain::Where('id', '=', $id)->pluck('court_id');
$case_info = CaseMain::Where('id', '=', $id);
return View::make('cases.update_case',  array())
->with('case_list1', $case_info->get())
->with('pagetitle', $case_info->pluck('caption'))
->with('court_info1', CourtMain::Where('id', '=', $court_id)->get());
}


public function add_case_attorney(){

$attorney_id = Input::get('p_number');
	Case1Attorney::create(array(
		'case_id' => Input::get('case_id'),
		'side' => Input::get('side'),
		'person' => Input::get('person'),
		'p_number' => AttorneyMain::where('p_number', '=', $attorney_id)->pluck('id'),
		'nor' => Input::get('nor'),
		'created_user' => Session::get('user_id'),
		'updated_user' => Session::get('user_id'),
		));

return Redirect::route('case_list');

}


public function new_case_attorney($id){
return View::make('cases.add_attorney',  array())
->with('pagetitle', 'Add Attorney')
->with('case_list1', CaseMain::where('id', '=', $id)->get());
}

public function new_nor_profile($id){
return View::make('cases.add_attorney',  array())
->with('pagetitle', 'Add NOR')
->with('case_list1', CaseMain::where('id', '=', $id)->get());
}


}