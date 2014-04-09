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

//client routes

Route::get('/worker', array('uses' => 'WorkerController@workerprofile'));

Route::get('/marketing/call', array('as' => 'callhome', 'uses' => 'MarketingController@callprofile'));

Route::post('/marketing/call/create', array('uses' => 'MarketingController@addcall'));

Route::get('/marketing/call/get', array('as' => 'callreport', 'uses' => 'MarketingController@callreport'));

Route::get('marketing/call/{id}', array('as' => 'callfollowupnotes', 'uses' => 'MarketingController@callfollowupnotes'));

Route::post('/marketing/call/followup', array('as' => 'logfollowupnotes', 'uses' => 'MarketingController@followupcall'));