@extends('layouts.report')
@section('content')

{{ Form::open(array('url' => '/case/new/create', 'POST')) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">

		'case_number' => Input::get('case_number'),x
		'date_received' => Input::get('date_received'),x
		'date_entered' => Input::get('date_entered'),0
		'user_entered_id' => Input::get('user_entered_id'),0
		'discovery_date' => Input::get('discovery_date'),x
		'court_id' => Input::get('court_id'),0
		'judge' => Input::get('judge'),
		'file_number' => Input::get('file_number'),
		'claim_number' => Input::get('claim_number'),
		'plaintiff' => Input::get('plaintiff'),
		'defendant' => Input::get('defendant'),
		'caption' => Input::get('caption'),
		'status' => Input::get('status'),
		'info' => Input::get('info'),

<tr><th>Case Number:</th><th>{{ Form::text('case_number') }}</th></tr>

<tr><th>Date Received:</th><th>{{ Form::text('date_received') }}</th></tr>

<tr><th>Discovery Date:</th><th>{{ Form::text('discovery_date') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>Date Received:</th><th>{{Form::select('business_type', array('Residential' => 'Residential', 'Commercial' => 'Commercial', 'Medical' => 'Medical')) }} </th></tr>

<tr><th>Contact Name:</th><th>{{ Form::text('first_name') }} {{ Form::text('last_name') }}</th></tr>

<tr><th>Office Manager:</th><th>{{ Form::text('office_manager') }}(optional)</th></tr>

<tr><th>Street:</th><th>{{ Form::text('street1') }} Suite #:{{ Form::text('street2') }}</th></tr>

<tr><th>City:</th><th>{{ Form::text('city') }}</th></tr>

<tr><th>Zip:</th><th>{{ Form::text('zip')}}</th></tr>

<tr><th>Hours:</th><th>{{ Form::text('hours') }}</th></tr>

<tr><th>Phone Number:</th><th>{{ Form::text('phone') }}</th></tr>

<tr><th>Fax Number:</th><th>{{ Form::text('fax') }}</th></tr>

<tr><th>Email:</th><th>{{ Form::text('email') }}</th></tr>

<tr><th>Notes:</th><th>{{ Form::textarea('notes') }}</th></tr>


  </table>

  {{ Form::submit ('Create Client') }}

    {{ Form::close() }}
@stop