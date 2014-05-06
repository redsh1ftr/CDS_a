@extends('layouts.profile')
@section('topbar')
@stop


@section('content_left')
<h2>
<table width="100%">
<td>Job: {{$job_list1->job_number}}</td>
<td>Case: {{link_to_route('case_profile', $case_list1->case_number, $case_list1->id, array('id' => $case_list1->id)); }}</td>
<td>Status: {{$job_list1->status}}</td>
	<tr>
</table>
</h2>

Requesting Attorney:<br>
<?php $requester_name = "$requester_list1->first_name $requester_list1->last_name";?>
{{link_to_route('attorney_profile', "$requester_name (P# $requester_list1->p_number)", $requester_list1->id, array('id' => $requester_list1->id)); }}


@foreach($deponent_list1 as $dep)
<br>Deponent:<br>

<div class="f1">{{link_to_route('deponent_profile', $dep->name, $dep->id, array('id' => $dep->id)); }}</div>
Phone: {{$dep->phone}}<br>
{{HTML::mailto($dep->email)}}<br>
@endforeach

@foreach($other_side1 as $other)
{{$other->first_name}}
@endforeach




<br><br><br><br><br><br><br><br><br><br><br><br>


@stop
