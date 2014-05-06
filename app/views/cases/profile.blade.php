@extends('layouts.profile')





@section('topbar')

@foreach($case_list1 as $case_list)
<h3>
	<table width=30%> <th colspan="2">
	<th>{{ HTML::link("//10.0.1.125/Records/$case_list->case_number/Documents", 'View Documents') }}</th>
	<th>{{ HTML::link("//10.0.1.125/Records/$case_list->case_number/Records", 'View Records') }}</th>
	<th>{{link_to_route('new_job', 'New Job', $case_list->id, array('id' => $case_list->id)); }}
</table>
</h3>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">

@stop





@section('content_left')
@foreach($case_list1 as $case_list)



<TABLE ALIGN="center"> <TH COLSPAN="2"></tr>
<th>
</th><tr>
<th>Case Number:</th><th>{{ $case_list->case_number }}</th></tr>
<th>Caption:</th><th>{{ $case_list->caption }}</th></tr>

<th>Judge:</th> <th> {{ $case_list->judge }}</th></tr>
</table>
@foreach ($court_info1 as $court_info)

<TABLE ALIGN="center"> <TH COLSPAN="2"></tr>
	<th>
<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>


@if($court_link_type === 'Federal')
{{link_to_route('court_profile', "$court_link_number United States $court_link_type Court", $court_info->id, array('id' => $court_info->id)); }}
@else
{{link_to_route('court_profile', "$court_link_number $court_link_type Court of $court_link_county County", $court_info->id, array('id' => $court_info->id)); }}
@endif
@endforeach
</th>
</table>
@stop


@section('content_right')
<TABLE ALIGN="center"> <TH COLSPAN="2"></tr>
<th>	
{{ Form::open(array('route' => 'change_case_status', 'POST')) }}
Status: 
{{Form::select(
	'status', array('Error' => $case_list->status,
	'Open' => 'Open',
	'Closed' => 'Closed',
	'Waiting' => 'Waiting',
	'Hold Records' => 'Hold',
	'Case Settled' => 'Settled')) }}
{{Form::hidden('case_status_id', $case_list->id)}}</th><th>

  {{ Form::submit ('Change Status') }}</th></tr>
  <th>File Number:</th><th>	{{ $case_list->file_number }}</th></tr>
<th>Claim Number:</th><th>	{{ $case_list->claim_number }}</th></tr>
@if($case_list->discovery_date)
<th>Discovery Date:</th><th> {{ $case_list->discovery_date }}</th><tr>
@endif
</table>
  @if($case_list->created_at != $case_list->updated_at) <br>Status Changed: {{$case_list->updated_at}} by {{$case_list->updated_user}}<br>
  @endif
@endforeach

    {{ Form::close() }}
<br><br><br>
@stop






@section('plaintiff')
<br><br>
Plaintiff
<HR WIDTH="100%" ALIGN="right" COLOR="#000000" SIZE="2">
@foreach($plaintiff1 as $plaintiffs)
@if($plaintiffs->nor)
{{ link_to_route('nor_profile', $plaintiffs->person, $plaintiffs->id, array('id' => $plaintiffs->id)); }}<br>
@else
{{ $plaintiffs->person }}<br>
@endif
@endforeach


@stop


@section('plaintiff_attorney')
<br><br>
Plaintiff's Attorney
<HR WIDTH="100%" ALIGN="left" COLOR="#000000" SIZE="2">
@foreach($plaintiff1 as $plaintiffs)
<?php $platty = AttorneyMain::where('id', '=', $plaintiffs->p_number)->get();?>

@foreach($platty as $plattys)
<?php $atty_middle = Str::limit($plattys->middle_name, $limit=1, $end='.')?>
<?php $atty_last = $plattys->last_name?>
<?php $pnumb = $plattys->p_number?>
<?php $atty_name = "$plattys->first_name $atty_middle $plattys->last_name";?>
{{ link_to_route('attorney_profile', "$atty_name (P# $plattys->p_number)", $plattys->id, array('id' => $plattys->id)); }}<br>
@endforeach
@endforeach
@stop








@section('defendant')
<br><br>
Defendant
<HR WIDTH="100%" ALIGN="right" COLOR="#000000" SIZE="2">
@foreach($defendant1 as $defendants)
@if($defendants->nor)
{{ link_to_route('nor_profile', $defendants->person, $defendants->id, array('id' => $defendants->id)); }}<br>
@else
{{ $defendants->person }}<br>
@endif
@endforeach


@stop

@section('defendant_attorney')
<br><br>
Defendant's Attorney
<HR WIDTH="100%" ALIGN="left" COLOR="#000000" SIZE="2">
@foreach($defendant1 as $defendants)
<?php $defs = AttorneyMain::where('id', '=', $defendants->p_number)->get();?>
@foreach($defs as $defs)
<?php $atty_middle = Str::limit($defs->middle_name, $limit=1, $end='.')?>
<?php $atty_last = $defs->last_name?>
<?php $pnumb = $defs->p_number?>
<?php $atty_name = "$defs->first_name $atty_middle $defs->last_name";?>
{{ link_to_route('attorney_profile', "$atty_name (P# $defs->p_number)", $defs->id, array('id' => $defs->id)); }}<br>
@endforeach
@endforeach


@stop

@section('timestamper')

<h3>Created at: {{ $case_list->created_at}} by {{$case_list->created_user}} </h3><br>


@endforeach

@stop


@section('last')
{{link_to_route('new_case_attorney', 'Add More Plaintiffs, Defendants, or Attorneys', $case_list->id, array('id' => $case_list->id)); }}
<br><br><br>


Case Notes:
<HR WIDTH="60%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
{{$case_list->info }}

@foreach($depname as $depnames)
<?php $deponents = DeponentMain::where('id', '=', $depnames)->lists('name');?>



@endforeach
Jobs:
<HR WIDTH="60%" ALIGN="LEFT" COLOR="#000000" SIZE="2">

<table width=70%>
@foreach($job as $jobs)

@foreach($deponents as $dep)

<td>{{link_to_route('job_profile', $jobs->job_number, $jobs->id, array('id' => $jobs->id)); }}</td> 
<td>{{ DeponentMain::where('id', '=', $jobs->deponent_id)->pluck('name') }}</td>
<td>{{$jobs->type}}</td> 
</tr>


@endforeach

@endforeach
</table>

@stop