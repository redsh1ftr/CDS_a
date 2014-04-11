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

Route::get('/court/new', array('as' => 'new_court', 'uses' => 'CourtController@new_court'));

Route::get('/court/new/create', array('as' => 'create_new_court', 'uses' => 'CourtController@create_new_court'));
//case routes

Route::get('/case/new/create', array('as' => 'create_new_case', 'uses' => 'CaseController@create_new_case'));

Route::get('case/new/court/{$id}', array('as' => 'new_case_court', 'uses' => 'CaseController@new_case_court'));

Route::get('/case/new', array('as' => 'new_case', 'uses' => 'CaseController@new_case'));

Route::get('/case', array('as' => 'case_home', 'uses' => 'CaseController@case_home'));

Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@callprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));

Route::get('/marketing/call/get', array('as' => 'callreport', 'uses' => 'MarketingController@callreport'));

Route::get('marketing/call/{id}', array('as' => 'callfollowupnotes', 'uses' => 'MarketingController@callfollowupnotes'));

Route::post('/marketing/call/followup', array('as' => 'logfollowupnotes', 'uses' => 'MarketingController@followupcall'));