@extends('layouts.profile')
@section('content_left')


<table>

{{ Form::open(array('route' => 'add_invoice', 'POST')) }}




<td>
{{ Form::label('type', 'Invoice Type:')}}
<td>
<select name="type">
<option value= "">Only Use if Known....</option>
<option value="Records">Records</option>
<option value="Billing">Billing</option>
<option value="Films">Films</option>
</select>
<td><tr>

<td>
{{ Form::label('recieved', 'Date Recieved') }}:
<td>
<input type="text" id="datepicker" name="received">
<tr>



<td>
{{ Form::label('invoice_number', 'Invoice Number:')}}
<td>
{{ Form::text('invoice_number')}}
<tr>
<td>
{{ Form::label('invoice_amount', 'Invoice Amount:')  }}
<td>
{{ Form::text('invoice_amount')}}
</tr>
</table>
<br>
{{Form::label('info', 'Notes:')}}
 <br>
{{ Form::textarea('info') }}
</table>
<br><br>
{{ Form::hidden('job_id', $job_id) }}

{{ Form::submit('Add Invoice')}}

{{ Form::close() }}

@stop