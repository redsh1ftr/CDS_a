@extends('layouts.report')
@section('content')
	

{{ Form::open(array('url' => '/marketing/call/create', 'POST')) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">
<tr><th> Business Name:</th><th>{{ Form::text('business_name') }}</th></tr>

<tr><th>Street:</th><th>{{ Form::text('street') }}</th></tr>

<tr><th>City:</th><th>{{ Form::text('city')  }}</th></tr>

<tr><th>Zip:</th><th>{{ Form::text('zip')}}</th></tr>

<tr><th>Phone Number:</th><th>{{ Form::text('phone') }}</th></tr>

<tr><th>Office Manager:</th><th>{{ Form::text('office_manager') }}</th></tr>

<tr><th>Contact Email:</th><th>{{ Form::text('email') }}</th></tr>

<tr><th>Hours:</th><th>{{ Form::text('hours') }}</th></tr>

<tr><th>Who Answered:</th><th>{{ Form::text('answered') }}</th></tr>

<tr><th>Notes:</th><th>{{ Form::textarea('call_notes') }}</th></tr>


  </table>

  {{ Form::submit ('Log Call') }}

    {{ Form::close() }}
<br><br><br>

{{ link_to_route('callreport', 'Call Report') }}