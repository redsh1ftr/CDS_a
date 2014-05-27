@extends('layouts.profile')
@section('content_left')
<h2>Currently Paying for:</h2>
<table width="100%" border="1">
<?php $nor = NorMain::where('id', '=', $job_list1->nor_id)->first();?>

<td>Invoice # <td>{{$invoice_list1->invoice_number}}<tr>
<td>Received <td>{{Carbon::parse($invoice_list1->received)->format('D, M d Y')}}<tr>
<td>Amount <td>{{$invoice_list1->invoice_amount}}<tr>
<td>Deponent<td>{{DeponentMain::where('id', '=', $job_list1->deponent_id)->pluck('name')}}<tr>



<td>NOR<td>{{$nor->first_name}} {{$nor->middle_name}} {{$nor->last_name}} ({{$nor->dob}})<tr>
</table>



<br><br>

{{ Form::open(array('route' => 'pay_invoice', 'POST')) }}
<table>
<td>{{Form::label('payment', 'Check Number')}}
<td>{{Form::text('payment')}}<tr>

<td>{{ Form::label('sent', 'Date Sent:')  }}
<td><input type="text" id="datepicker" name="sent">
</table>

<br><br>
{{ Form::hidden('inv_id', $invoice_list1->id)}}
{{ Form::submit('Pay Invoice')}}


@stop