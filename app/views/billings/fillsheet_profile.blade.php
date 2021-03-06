@extends('layouts.profile')
@section('content_left')

{{-- VARIABLE DECLARATIONS --}}

<?php $deponentname = DeponentMain::where('id', '=', JobMain::where('id', '=', $cost->job)->pluck('deponent_id'))->pluck('name');?>
<?php $nor = NorMain::where('id', '=', JobMain::where('id', '=', $cost->job)->pluck('nor_id'))->first();?>
<?php $shipcost = AttorneyMain::where('id', '=', $cost->requester)->pluck('shipping');?>
<?php $invv = number_format(CompanyDefault::first()->subp_fee + $cost->invoices + $cost->cost + $shipcost, 2);?>

{{-- END VARIABLES --}}




{{-- PAGE PRICING LOGIC --}}

@if($pagesum <= 0)
<?php $pagetotal = 0;?>
@elseif($pagesum < 10)
<?php $pagetotal = 10.00;?>
@elseif($pagesum <= 20)
<?php $pagetotal = ($defaults->stat_base + ($pagesum * $defaults->stat_120));?>
@elseif($pagesum <= 50)
<?php $pagetotal = ($defaults->stat_base + 23.40 + (($pagesum - 20) * $defaults->stat_2150));?>
@elseif($pagesum > 50)
<?php $pagetotal = ($defaults->stat_base + 41.1 + (($pagesum - 50) * $defaults->stat_50));?>

@endif

{{-- END PAGE PRICING LOGIC --}}




<table width="120%" border="1">

<td>YOUR FILE# {{CaseMain::where('id', '=', JobMain::where('id', '=', $cost->job)->pluck('case_id'))->pluck('claim_number')}}<tr>
@if($cost->subp)
<td>Preparation of Subpoena and Notice regarding {{$deponentname}}
<td> ${{$cost->subp}}<tr>
@endif
<td>Facility Fee<td>${{number_format($cost->invoices, 2)}}<tr>
<td>Reproduction of Records received from Deponent {{$deponentname}} regarding {{$nor->first_name}} {{$nor->middle_name}} {{$nor->last_name}} 
	- ({{$cost->pages}} Pages) {{CaseMain::where('id', '=', JobMain::where('id', '=', $cost->job)->pluck('case_id'))->pluck('caption')}}
<td>${{number_format($cost->cost, 2)}}<tr>

<td>Postage and Handling.<td>${{number_format($shipcost,2)}}<tr>



</table>
<br><br>
<table width="120%" border="0">
<td>Invoice Total:<td>${{number_format(CompanyDefault::first()->subp_fee + $cost->invoices + $cost->cost + $shipcost, 2)}}
</table>

{{ Form::open(array('route' => 'add_records', 'POST')) }}
<table>
<td>
{{Form::text('cost', $invv)}}
<tr>

{{Form::submit('Create Invoice')}}

{{Form::close()}}

@stop