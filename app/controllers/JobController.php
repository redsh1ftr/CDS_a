<?php

class JobController extends BaseController {

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


public function select_deponent(){

return View::make('jobs.deponent_list',  array())
->with('pagetitle', 'Select Deponent')
->with('case_list1', DeponentMain::orderBy('updated_at', 'desc')->get());
}

public function job_profile($id){
$case_id = JobMain::where('id', '=', $id)->pluck('case_id');
$deponent_id = JobMain::where('id', '=', $id)->pluck('deponent_id');
$requester_id = JobMain::where('id', '=', $id)->pluck('requester_id');
$nor_id = JobMain::where('id', '=', $id)->pluck('nor_id');
return View::make('jobs.profile',  array())
->with('pagetitle', 'stuff')
->with('case_list1', CaseMain::where('id', '=', $case_id)->first())
->with('deponent_list1', DeponentMain::where('id', '=', $deponent_id)->get())
->with('requester_list1', AttorneyMain::where('id', '=', $requester_id)->first())
->with('nor_list1', NorMain::where('id', '=', $nor_id)->get())
->with('job_list1', JobMain::where('id', '=', $id)->first())
->with('other_side1', Case1Attorney::where('case_id', '=', $case_id)->where('p_number', '=', $requester_id)->get());
}

public function deponent_selected($id){
$case_id = Cache::get('case_id');
$nor_id = Cache::get('nor_id');
$requester_id = Cache::get('requester');
return View::make('jobs.job_options',  array())
->with('pagetitle', 'Job Options')
->with('jobtypes', JobTypeMain::lists('type'))
->with('jobid', JobTypeMain::lists('id'))
->with('dep_list1', DeponentMain::where('id', '=', $id)->get())
->with('case', CaseMain::where('id', '=', $case_id)->get())
->with('nor', NorModel::where('id', '=', $nor_id)->get())
->with('requester', AttorneyMain::where('id', '=', $requester_id)->get());

}

public function new_job($id){
Cache::forget('recieved');
Cache::forget('rush');
Cache::forget('requester');
Cache::forget('nor_id');
Cache::forget('case_id');
return View::make('jobs.new_job',  array())
->with('pagetitle', 'New Job')
->with('atty', Case1Attorney::where('case_id', '=', $id)->where('p_number', '>', '')->lists('p_number'))
->with('case1', CaseMain::where('id', '=', $id)->get())
->with('nors', NorModel::where('case_id', '=', $id)->get())
->with('case_id', $id);
}


public function requester_selected(){
Cache::forever('recieved', Input::get('recieved'));
Cache::forever('rush', Input::get('rush'));
Cache::forever('requester', Input::get('requester'));
Cache::forever('nor_id', Input::get('nor'));
Cache::forever('case_id', Input::get('case_id'));
return Redirect::route('select_deponent');
}

public function make_job(){
JobMain::create(array(
		'case_id' => Cache::get('case_id'),
		'deponent_id' => Input::get('deponent_id'),
		'nor_id' => Cache::get('nor_id'),
		'requester_id' => Cache::get('requester'),
		'job_number' => '13-15000',
		'request_received' => Cache::get('recieved'),
		'rush' => Cache::get('rush'),
		'hold' => '',
		'status' => 'Open',
		'films' => Input::get('films'),
		'type' => Input::get('type'),
		'need_auth' => Input::get('auths'),
		'need_info' => Input::get('add_info'),
		'served' => '',
		'records_due' => '',	
		'info' => '',	
		'created_user' => Cache::get('user_id'),
		'updated_user' => Cache::get('user_id'),
		));

return View::make('jobs.deponent_list',  array())
->with('pagetitle', 'Select Deponent')
->with('dep_list1', DeponentMain::orderBy('updated_at', 'desc')->get());

}


public function change_status(){
$case_status_id = Input::get('case_status_id');
$date = new \DateTime;
if(Input::get('status') != 'Error') {
DB::table('case_list')->where('id', '=', $case_status_id)->update(array('status' => Input::get('status'), 'updated_at' => $date, 'updated_user' => Cache::get('user_id')));
return View::make('cases.case_list',  array())
->with('pagetitle', 'Case List')
->with('case_list1', CaseMain::orderBy('updated_at', 'desc')->get());
}
return Redirect::route('case_list');
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
->with('defendant1', $defendant);
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
	Case1Attorney::create(array(
		'case_id' => Input::get('case_id'),
		'side' => Input::get('side'),
		'person' => Input::get('person'),
		'p_number' => Input::get('p_number'),
		'nor' => Input::get('nor'),
		'created_user' => Cache::get('user_id'),
		'updated_user' => Cache::get('user_id'),
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