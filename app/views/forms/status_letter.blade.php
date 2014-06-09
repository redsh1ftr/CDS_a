@extends('layouts.status_letter')
@section('topimage')
<img src=//localhost/CDS_a/Images/headertempla1.png><br>
@stop

@section('content_left')


<br>
<b>YOUR RESPONSE IS REQUIRED</b>
<br><br>
<div class="f1">
<?php $job = JobMain::where('id', '=', $jid)->first();?>
<?php $atty = AttorneyMain::where('id', '=', $job->requester_id)->first();?>
<?php $firm = FirmMain::where('id', '=', $atty->firm_id)->first();?>
<?php $case = CaseMain::where('id', '=', $job->case_id)->first();?>
<?php $nor = NorMain::where('id', '=', $job->nor_id)->first();?>
<?php $deponent = DeponentMain::where('id', '=', $job->deponent_id)->first();?>
<?php $dep = DeponentMain::where('id', '=', $job->deponent_id)->pluck('name');?>
<?php $sts = DB::table('status_letters')->where('id', '=', $lid)->pluck('verbiage');?>
<?php $status = StatusLetter::where('id', '=', $lid)->first();?>

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
</div>

<div class="f1">
CASE CAPTION: <b>{{$case->caption}}</b> <br>
NAME ON RECORD: <b>{{$nor->first_name}} {{$nor->middle_name}} {{$nor->last_name}}</b><br>
CASE NO: <b>{{$case->case_number}}</b><br>
DUE DATE: <b>{{$case->records_due}}</b><br>
DEPONENT: <b>{{$deponent->name}}</b><br>
FILE/CLAIM: <b>{{$case->claim_number}}</b><br>
</div>

@stop


@section('content')

<div class="f1">
Dear {{$atty->title}} {{$atty->last_name}}, <br><br>
In order to keep you fully apprised of the above-referenced record request, please note the following:<br><br>


<li>
{{str_replace('DEPONENTNAME', $dep, $sts)}}
</li>


<br><br>

{{$status->response}}<br><br><br>
</div>

@stop

@section('regards')
<div class="f1">
Kindest regards,<br><br>
C D Services, Inc.
</div>
@stop

@section('jobnumber')
<div class="rf1">
CDSJOB#: {{$job->job_number}}<br>
CDS FILE#: {{$case->case_number}}
</div>

@stop