@extends('layouts.report')
@section('content')

{{ Form::model($CaseMain, array('new_case' => array(CaseMain.update', $CaseMain->id))) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">

<tr><th>Case Number:</th><th>{{ Form::text('case_number') }}</th></tr>

<tr><th>Date Received:</th><th>{{ Form::text('date_received') }}</th></tr>

<tr><th>Discovery Date:</th><th>{{ Form::text('discovery_date') }}</th></tr>

<tr><th>Judge:</th><th>{{ Form::text('judge') }}</th></tr>

<tr><th>File Number:</th><th>{{ Form::text('file_number') }}</th></tr>

<tr><th>Claim Number:</th><th>{{ Form::text('claim_number') }}</th></tr>

<tr><th>Plaintiff:</th><th>{{ Form::text('plaintiff') }}</th></tr>

<tr><th>Defendant:</th><th>{{ Form::text('defendant') }}</th></tr>

<tr><th>Case Caption:</th><th>{{ Form::text('caption') }}</th></tr>

<tr><th>Additional Notes:</th><th>{{ Form::textarea('info') }}</th></tr>


  </table>


{{ Form::hidden('status', 'Open') }}
{{ Form::hidden('court_id', $court_id) }}
{{ Form::hidden('user_entered_id', 'Test ID') }}

  {{ Form::submit ('Create Case') }}

    {{ Form::close() }}
@stop