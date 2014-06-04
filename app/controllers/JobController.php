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


public function job_profile($id){
$case_id = JobMain::where('id', '=', $id)->pluck('case_id');
$deponent_id = JobMain::where('id', '=', $id)->pluck('deponent_id');
$requester_id = JobMain::where('id', '=', $id)->pluck('requester_id');
$nor_id = JobMain::where('id', '=', $id)->pluck('nor_id');
return View::make('jobs.profile',  array())
->with('pagetitle', JobMain::where('id', '=', $id)->pluck('job_number'))
->with('case_list1', CaseMain::where('id', '=', $case_id)->first())
->with('deponent_list1', DeponentMain::where('id', '=', $deponent_id)->get())
->with('requester_list1', AttorneyMain::where('id', '=', $requester_id)->first())
->with('nor_list1', NorMain::where('id', '=', $nor_id)->get())
->with('job_list1', JobMain::where('id', '=', $id)->first())
->with('other_side1', Case1Attorney::where('case_id', '=', $case_id)->where('attorney_id', '!=', $requester_id)->lists('attorney_id'))
->with('records_list1', RecordsMain::where('job_id', '=', $id)->get())
->with('invoice_list1', InvoiceMain::where('job_id', '=', $id)->get());
}

public function new_job($id){
Session::forget('recieved');
Session::forget('rush');
Session::forget('requester');
Session::forget('nor_id');
Session::forget('case_id');
return View::make('jobs.new_job',  array())
->with('pagetitle', 'New Job')
->with('atty', Case1Attorney::where('case_id', '=', $id)->where('attorney_id', '>', '')->lists('attorney_id'))
->with('case1', CaseMain::where('id', '=', $id)->get())
->with('nors', NorModel::where('case_id', '=', $id)->get())
->with('case_id', $id);
}


public function requester_selected(){
$received = Carbon::parse(Input::get('received'));
Session::put('recieved', $received);
Session::put('rush', Input::get('rush'));
Session::put('requester', Input::get('requester'));
Session::put('nor_id', Input::get('nor'));
Session::put('case_id', Input::get('case_id'));
return Redirect::route('select_deponent');
}


public function select_deponent(){
return View::make('jobs.deponent_list',  array())
->with('pagetitle', 'Select Deponent')
->with('dep_list1', DeponentMain::paginate(300))
->with('made_jobs1', JobMain::where('case_id', '=', Session::get('case_id'))->get());
}


public function deponent_selected($id){
$case_id = Session::get('case_id');
$nor_id = Session::get('nor_id');
$requester_id = Session::get('requester');
return View::make('jobs.job_options',  array())
->with('pagetitle', 'Job Options')
->with('jobtypes', JobTypeMain::lists('type'))
->with('jobid', JobTypeMain::lists('id'))
->with('dep_list1', DeponentMain::where('id', '=', $id)->get())
->with('case', CaseMain::where('id', '=', $case_id)->get())
->with('nor', NorModel::where('id', '=', $nor_id)->get())
->with('requester', AttorneyMain::where('id', '=', $requester_id)->get());

}



public function make_job(){
$jobnumerator =	DB::table('company_defaults')->pluck('job_number');
$jobnumer = $jobnumerator + 1;
$jobdate = Carbon::now()->format('y');
DB::table('company_defaults')->where('id', '=', 1)->update(array('job_number' => $jobnumer));		
	JobMain::create(array(
		'case_id' => Session::get('case_id'),
		'deponent_id' => Input::get('deponent_id'),
		'nor_id' => Session::get('nor_id'),
		'requester_id' => Session::get('requester'),
		'job_number' => "$jobdate-$jobnumer",
		'request_received' => Session::get('recieved'),
		'rush' => Session::get('rush'),
		'hold' => '',
		'status' => 'Open',
		'films' => Input::get('films'),
		'type' => Input::get('type'),
		'need_auth' => Input::get('auths'),
		'need_info' => Input::get('add_info'),
		'served' => '',
		'records_due' => '',	
		'info' => '',
		'updated' => Input::get('updated'),	
		'created_user' => Session::get('user_id'),
		'updated_user' => Session::get('user_id'),

		));

return Redirect::route('select_deponent',  array())
->with('pagetitle', 'Select Deponent')
->with('made_jobs1', JobMain::where('case_id', '=', Session::get('case_id'))->get());;
}


}