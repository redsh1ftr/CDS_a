@extends('layouts.default')
@section('content')
		

		Schema::create('client_list', function($table){
			$table->string('business_name');
			$table->string('hours');

		Schema::create('billing_contact_list', function($table){
			$table->string('first_name');
			$table->string('last_name');
			$table->string('open_hours');
			$table->string('phone_number');
			$table->string('fax_number');
			$table->string('email');
			$table->longtext('notes');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('zip');

		Schema::create('worksite_list', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('worksite_type');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone_number');
			$table->string('fax_number');
			$table->string('email');
			$table->string('hours');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('access_info');
			$table->longtext('notes');

		




{{ Form::open(array('url' => '/client')) }}
  Username:{{ Form::text('username') }}<br>
  Password: {{ Form::text('password') }}<br>
   {{ Form::submit ('Log In') }}

    {{ Form::close() }}
@stop