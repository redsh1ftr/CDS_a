@extends('layouts.profile')
@section('content_left')


<table>

{{ Form::open(array('route' => 'add_invoice_manual', 'POST')) }}


{{ Form::hidden('job_id', $job_id) }}

<td>{{ Form::label('type', 'Invoice Type:')}}
<td>
	<select name="type">
	<option value= "">Only Use if Known....</option>
	<option value="Records">Records</option>
	<option value="Billing">Billing</option>
	<option value="Films">Films</option>
	</select>
<tr>

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


{{ Form::submit('Add Invoice')}}

{{ Form::close() }}

@stop

@section('content_right')

@if($other_invoices1)
<h2>Other Invoices for Job# {{$job_list1->job_number}}</h2>
<table width="100%" border="1">
	<th>Date Received<th>Invoice Number<th>Amount</th><tr>
@foreach($other_invoices1 as $oinvs)

<td>{{Carbon::parse($oinvs->received)->format('D, M d Y')}}<td>{{$oinvs->invoice_number}}<td>{{$oinvs->invoice_amount}}<td>{{$oinvs->type}}<tr>

@endforeach
@endif

@stop