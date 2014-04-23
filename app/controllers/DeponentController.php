<?php

class DeponentController extends BaseController {

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


public function deponent_list_all(){

return View::make('deponents.deponent_list',  array())
->with('pagetitle', 'Deponent List')
->with('dep_list1', DeponentMain::orderBy('updated_at', 'desc')->get());
}

public function deponent_search_name($search_name){
$search_name = Input::get('search_name');
return View::make('deponents.deponent_list',  array())
->with('pagetitle', 'Deponents')
->with('dep_list1', DeponentMain::where('name', '=', $search_name)->get());

}

public function new_deponent(){
return View::make('deponents.create_new_deponent',  array())
->with('pagetitle', 'New Deponent');

}

public function create_new_deponent(){
	DeponentMain::create(array(
		'name' => Input::get('name'),
		'street1' => Input::get('street1'),
		'street2' => Input::get('street2'),
		'city' => Input::get('city'),
		'state' => Input::get('state'),
		'zip' => Input::get('zip'),
		'type' => Input::get('type'),
		'contact' => Input::get('contact'),
		'phone' => Input::get('phone'),
		'fax' => Input::get('fax'),
		'email' => Input::get('email'),
		'fee' => Input::get('fee'),
		'films' => Input::get('$films'),
		'films' => Input::get('$films', false),
		'copy_service' => Input::get('copy_service'),
		'info' => Input::get('info'),
		'active' => 'Yes',
		'info' => Input::get('info'),
		'created_user' => Cache::get('user_id'),
		'updated_user' => Cache::get('user_id'),
		));

return Redirect::route('deponent_list_all');

}

public function deponent_profile($id){
return View::make('deponents.profile',  array())
->with('pagetitle', DeponentMain::where('id', '=', $id)->pluck('name'))
->with('dep1', DeponentMain::where('id', '=', $id)->get());
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
->with('case_list1', CaseMain::find($id)->get());
}

public function new_nor_profile($id){
return View::make('cases.add_attorney',  array())
->with('pagetitle', 'Add NOR')
->with('case_list1', CaseMain::find($id));
}


}