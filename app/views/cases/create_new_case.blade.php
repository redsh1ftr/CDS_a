@extends('layouts.profile')
@section('content_left')

{{ Form::open(array('url' => '/case/new/create', 'POST')) }}
<TABLE  BORDER="0">
<td>
	{{ Form::label('case_number', 'Case Number') }}
<td>
	{{ Form::text('case_number') }}
<tr>


<td>
	{{ Form::label('date_received', 'Date Received') }}
<td>
<input type="text" id="datepicker" name="date_received">
<tr>


<td>
	{{ Form::label('discovery_date', 'Discovery Date') }}
<td>
<input type="text" id="datepicker2" name="discovery_date">
<tr>

<td>	
	{{ Form::label('judge', 'Judge') }}
<td>
	{{ Form::text('judge') }}
<td>

<tr>
<td>
	{{ Form::label('file_number', 'File Number') }}
<td>
	{{ Form::text('file_number') }}
<tr>


<td>
	{{ Form::label('claim_number', 'Claim Number') }}
<td>
	{{ Form::text('claim_number') }}
<tr>

<td>
	{{ Form::label('caption', 'Caption') }}
<td>
	{{ Form::text('caption') }}
<tr>

</table>
{{ Form::label('notes', 'Case Notes') }}
<br>
{{ Form::textarea('info') }}

{{ Form::hidden('status', 'Open') }}
{{ Form::hidden('court_id', $court_id) }}
  {{ Form::submit ('Create Case') }}

    {{ Form::close() }}
@stop