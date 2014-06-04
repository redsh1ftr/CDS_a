@extends('layouts.status_letter')
@section('content_left')
<br>
<b>YOUR RESPONSE IS REQUIRED</b>
<br><br>
<div class="f2">
<?php $atty = AttorneyMain::where('id', '=', $job->requester_id)->first();?>
<?php $firm = FirmMain::where('id', '=', $atty->firm_id)->first();?>
<?php $case = CaseMain::where('id', '=', $job->case_id)->first();?>
<?php $nor = NorMain::where('id', '=', $job->nor_id)->first();?>
<?php $deponent = DeponentMain::where('id', '=', $job->deponent_id)->first();?>

{{$atty->first_name}} {{$atty->last_name}}<br>
{{$firm->name}}<br>

@if($firm->street2) 
{{$firm->street1}},<br>
{{$firm->street2}}<br>
@else
{{$firm->street1}}<br>
@endif
{{$firm->city}} {{$firm->state}}, {{$firm->zip}}<br>
</div>



@stop


@section('content_right')
<div class="f2">
<br>VIA FACSIMILE: {{$firm->fax}}<br><br>
<div>

CASE CAPTION: <b>{{$case->caption}}</b> <br>
NAME ON RECORD: <b>{{$nor->first_name}} {{$nor->middle_name}} {{$nor->last_name}}</b><br>
CASE NO: <b>{{$case->case_number}}</b><br>
DUE DATE: <b>{{$case->records_due}}</b><br>
DEPONENT: <b>{{$deponent->name}}</b><br>
FILE/CLAIM: <b>{{$case->claim_number}}</b><br>



</div>
@stop
