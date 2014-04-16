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

Route::get('/logout', function() { return View::make('main.hello'); });

//court routes

Route::get('/court/list', array('as' => 'court_list', 'uses' => 'CourtController@court_list'));

Route::get('/court/hub', array('as' => 'court_hub', 'uses' => 'CourtController@court_hub'));

Route::get('/court/new', array('as' => 'new_court', 'uses' => 'CourtController@new_court'));

Route::post('/court/new/make', array('as' => 'create_new_court', 'uses' => 'CourtController@create_new_court'));

Route::get('/court/{id}', array('as' => 'court_profile', 'uses' => 'CourtController@court_profile'));



//case routes

Route::get('/case/list/all', array('as' => 'case_list', 'uses' => 'CaseController@case_list'));

Route::get('/case/new/court/{id}', array('as' => 'selected_court', 'uses' => 'CaseController@selected_court'));

Route::get('/case/new/select', array('as' => 'court_selection', 'uses' => 'CaseController@court_selection'));

Route::get('/case/new', array('as' => 'new_case', 'uses' => 'CaseController@new_case'));

Route::get('/case/{id}', array('as' => 'case_profile', 'uses' => 'CaseController@case_profile'));

Route::post('/case/new/create', array('as' => 'create_new_case', 'uses' => 'CaseController@create_new_case'));

Route::post('/case/change_status', array('as' => 'change_case_status', 'uses' => 'CaseController@change_status'));




//attorney routes

Route::get('attorney/firm/list', array('as' => 'firm_list', 'uses' => 'AttorneyController@firm_list'));

Route::get('attorney/firm/new', array('as' => 'create_firm', 'uses' => 'AttorneyController@new_firm'));

Route::get('/attorney/firm/{id}', array('as' => 'firm_profile', 'uses' => 'AttorneyController@firm_profile'));

Route::post('/attorney/firm/create', array('as' => 'create_new_firm', 'uses' => 'AttorneyController@create_new_firm'));



Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@callprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));

Route::get('/marketing/call/get', array('as' => 'callreport', 'uses' => 'MarketingController@callreport'));

Route::get('marketing/call/{id}', array('as' => 'callfollowupnotes', 'uses' => 'MarketingController@callfollowupnotes'));

Route::post('/marketing/call/followup', array('as' => 'logfollowupnotes', 'uses' => 'MarketingController@followupcall'));