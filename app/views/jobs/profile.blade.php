@extends('layouts.profile')
@section('topbar')


{{link_to_route('billsheet_profile', "Billsheet", $case_list1->id, array('id' => $case_list1->id)); }}
<HR WIDTH="100%" ALIGN="LEFT" COLOR="#000000" SIZE="2">

<h2>

<table width="100%">
<td>Job: {{$job_list1->job_number}}</td>
<td>Case: {{link_to_route('case_profile', $case_list1->case_number, $case_list1->id, array('id' => $case_list1->id)); }}</td>
<td>Status: {{$job_list1->status}}</td>
<td>Type: {{$job_list1->type}}<br>
	<tr>
</table>
</h2>
<HR WIDTH="100%" ALIGN="LEFT" COLOR="#000000" SIZE="2">

@if($job_list1->rush)
<h1><div class="centertext">
Rushhhhhhhhhhhhhhhhhhhhhhhhhh
</div>
<HR WIDTH="100%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
</h1>
@endif	
@stop


@section('content_left')




Requesting Attorney:<br>
<?php $requester_name = "$requester_list1->first_name $requester_list1->last_name";?>
{{link_to_route('attorney_profile', "$requester_name (P# $requester_list1->p_number)", $requester_list1->id, array('id' => $requester_list1->id)); }} 


@foreach($deponent_list1 as $dep)
<br><br>Deponent:<br>

<div class="f1">{{link_to_route('deponent_profile', $dep->name, $dep->id, array('id' => $dep->id)); }}</div>
Phone: {{$dep->phone}}<br>

@if($dep->email)
{{HTML::mailto($dep->email)}}<br>
@endif
{{$dep->copy_service}}
@endforeach


<br><br><br>
Name on Record:<br>
@foreach($nor_list1 as $nor)
{{$nor->first_name}} {{$nor->middle_name}} {{$nor->last_name}}<br>
@if($nor->street2){{$nor->street1}}, {{$nor->street2}}
@else{{$nor->street1}}
@endif
<br>
{{$nor->city}} {{$nor->state}}, {{$nor->zip}}<br><br>
SSN: {{$nor->ssn}}<br>
DOB: {{$nor->dob}}<br>

@if($nor->phone)
Phone: {{$nor->phone}}
@endif


@endforeach





<br><br><br>
Opposing Request:<br>


<table width = 100%>
@foreach($other_side1 as $other)
<?php $opposing_first = AttorneyMain::where('id', '=', $other)->pluck('first_name');?>
<?php $opposing_middle = AttorneyMain::where('id', '=', $other)->pluck('middle_name');?>
<?php $opposing_last = AttorneyMain::where('id', '=', $other)->pluck('last_name');?>
<?php $opposing_p = AttorneyMain::where('id', '=', $other)->pluck('p_number');?>
<?php $preference = AttorneyMain::where('id', '=', $other)->pluck('preference');?>
<?php $side = Case1Attorney::where('attorney_id', '=', $other)->pluck('side');?>





<td>

{{link_to_route('attorney_profile', "$opposing_first $opposing_middle $opposing_last (P# $opposing_p)", AttorneyMain::where('id', '=', $other)->pluck('id'), array('id' => AttorneyMain::where('id', '=', $other)->pluck('id'))) }} 
</td><td>{{$preference}}</td>
<td>{{$side}}</td><tr>



@endforeach
</table>



<br><br><br><br><br><br><br><br><br><br><br><br>


@stop
