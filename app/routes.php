<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function() { return View::make('main.hello'); });

Route::post('/home', array('as' => 'login_home', 'uses' => 'WorkerController@login_home'));

Route::get('/logout', array('as' => 'logout', 'uses' => 'WorkerController@logout'));




//court routes

Route::get('/court/list', array('as' => 'court_list', 'uses' => 'CourtController@court_list'));

Route::get('/court/hub', array('as' => 'court_hub', 'uses' => 'CourtController@court_hub'));

Route::get('/court/new', array('as' => 'new_court', 'uses' => 'CourtController@new_court'));

Route::post('/court/new/make', array('as' => 'create_new_court', 'uses' => 'CourtController@create_new_court'));

Route::get('/court/{id}', array('as' => 'court_profile', 'uses' => 'CourtController@court_profile'));




//deponent routes

Route::get('/deponent/list/all', array('as' => 'deponent_list_all', 'uses' => 'DeponentController@deponent_list_all'));

Route::get('/deponent/new', array('as' => 'new_deponent', 'uses' => 'DeponentController@new_deponent'));

Route::get('/deponent/{id}', array('as' => 'deponent_profile', 'uses' => 'DeponentController@deponent_profile'));

Route::post('/deponent/new/create', array('as' => 'create_new_deponent', 'uses' => 'DeponentController@create_new_deponent'));


//Nor routes

Route::get('/case/nor/{id}', array('as' => 'nor_profile', 'uses' => 'NorController@nor_profile'));

Route::post('/case/nor/new/', array('as' => 'create_new_nor', 'uses' => 'NorController@create_new_nor'));

Route::get('/case/nor/former_address', array('as' => 'create_former_address', 'uses' => 'NorController@create_former_address'));



//case routes

Route::get('/case/list/all', array('as' => 'case_list', 'uses' => 'CaseController@case_list'));

Route::get('case/update/{id}', array('as' => 'case_update', 'uses' => 'CaseController@case_update'));

Route::post('/case/list/{sort}', array('as' => 'case_list_sort', 'uses' => 'CaseController@case_list_sort'));

Route::get('/case/new/court/{id}', array('as' => 'selected_court', 'uses' => 'CaseController@selected_court'));

Route::post('/case/list/sorting', array('as' => 'sort_case_list', 'uses' => 'CaseController@sort_case_list'));

Route::get('/case/new/select', array('as' => 'court_selection', 'uses' => 'CaseController@court_selection'));

Route::get('/case/new', array('as' => 'new_case', 'uses' => 'CaseController@new_case'));

Route::get('/case/attorney/{id}', array('as' => 'new_case_attorney', 'uses' => 'CaseController@new_case_attorney'));

Route::post('/case/attorney/add', array('as' => 'add_case_attorney', 'uses' => 'CaseController@add_case_attorney'));

Route::get('/case/{id}', array('as' => 'case_profile', 'uses' => 'CaseController@case_profile'));

Route::post('/case/new/create', array('as' => 'create_new_case', 'uses' => 'CaseController@create_new_case'));

Route::post('/case/change_status', array('as' => 'change_case_status', 'uses' => 'CaseController@change_status'));


//Job Routes

Route::get('/job/new/{id}', array('as' => 'new_job', 'uses' => 'JobController@new_job'));

//attorney routes
Route::get('attorney/list/all', array('as' => 'attorney_list', 'uses' => 'AttorneyController@attorney_list'));

Route::get('attorney/new/select_firm/{id}', array('as' => 'firm_selection', 'uses' => 'AttorneyController@selected_firm'));



Route::get('attorney/{id}', array('as' => 'attorney_profile', 'uses' => 'AttorneyController@attorney_profile'));

Route::post('/attorney/new/create', array('as' => 'create_new_attorney', 'uses' => 'AttorneyController@create_new_attorney'));

//firm routes

Route::get('attorney/firm/list', array('as' => 'firm_list', 'uses' => 'AttorneyController@firm_list'));

Route::get('attorney/firm/new', array('as' => 'create_firm', 'uses' => 'AttorneyController@new_firm'));

Route::get('/attorney/firm/{id}', array('as' => 'firm_profile', 'uses' => 'AttorneyController@firm_profile'));

Route::post('/attorney/firm/create', array('as' => 'create_new_firm', 'uses' => 'AttorneyController@create_new_firm'));



Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@callprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));

Route::get('/marketing/call/get', array('as' => 'callreport', 'uses' => 'MarketingController@callreport'));

Route::get('marketing/call/{id}', array('as' => 'callfollowupnotes', 'uses' => 'MarketingController@callfollowupnotes'));

Route::post('/marketing/call/followup', array('as' => 'logfollowupnotes', 'uses' => 'MarketingController@followupcall'));