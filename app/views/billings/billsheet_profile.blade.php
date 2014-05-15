@extends('layouts.profile')


@section('content_left')
<table>

{{ Form::open(array('route' => 'add_records', 'POST')) }}
<td>
{{ Form::label('recieved', 'Date Recieved') }}:
<td>
<input type="text" id="datepicker" name="received">

<tr>
<td>
{{ Form::label('quantity', 'Quantity:')  }}
<td>
{{ Form::text('quantity')}}
</tr>
<td><td>{{Form::checkbox('with_invoice', '1');}}  {{ Form::label('with_invoice', 'Invoice Received') }}
</table>
<br>
{{Form::label('info', "Notes:")}}
<br>
{{ Form::textarea('info')}}

{{ Form::submit('Check In Records')}}
{{ Form::close() }}

<br><br>

@stop