@extends('layouts.profile')



@section('content_left')

{{Session::get('nor_id')}}

<table>

{{ Form::open(array('route' => 'add_records', 'POST')) }}
<td>
{{ Form::label('recieved', 'Date Recieved') }}:
<td>
<input type="text" id="datepicker" name="recieved">
<td>
</tr>
<td>
{{ Form::label('type', 'Record Type') }}:
<td>
<select name="type">
@foreach($rec_type1 as $type)

<option value="{{  $type   }}"=>{{ $type }}
@endforeach
</select>
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
{{ Form::hidden('job_id', $job_list1->id)}}<br>
{{ Form::submit('Check In Records')}}
{{ Form::close() }}

<br><br>
{{link_to_route('job_profile', "Back to Job $job_list1->job_number", $job_list1->id, array('id' => $job_list1->id)); }}

@stop