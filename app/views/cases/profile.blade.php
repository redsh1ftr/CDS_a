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
{{ $plaintiffs->person }}<br>
@endforeach

{{ $case_list->plaintiff }}<br>

@stop


@section('plaintiff_attorney')
<br><br>
Plaintiff's Attorney
<HR WIDTH="100%" ALIGN="left" COLOR="#000000" SIZE="2">
{{HTML::link('attorney/1', 'Christopher Smith')}}
@stop


@section('defendant')
<br><br>
Defendant
<HR WIDTH="100%" ALIGN="right" COLOR="#000000" SIZE="2">
@foreach($defendant1 as $defendants)
{{ $defendants->person }}<br>
@endforeach


@stop

@section('defendant_attorney')
<br><br>
Defendant's Attorney
<HR WIDTH="100%" ALIGN="left" COLOR="#000000" SIZE="2">
{{HTML::link('attorney/2', 'Attorney Name')}}<br>



	Co-Defense Attorney 2<br>
	Co-Defense Attorney 3<br></h3>

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
{{$case_list->info }}<br><br><br><br>


Jobs:
<HR WIDTH="60%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
<table>
<th>13-16551</th><th>{{Str::limit('Ashwin Judagagabajabarbadara MMRD.D.O.', $limit=50, $end='')}}</th><th>(DOC)</th><th>NEED INFO</th><tr>
<th>13-16552</th><th>{{Str::limit('Henry Ford Hospital', $limit=50, $end='')}}</th><th>(BIL)<th>WAIT-AUTH</th><tr>
<th>13-16553</th><th>{{Str::limit('Henry Ford Hospital', $limit=50, $end='')}}</th><th>(EMP)</th><th>BAD FAX</th><tr>
<th>13-16554</th><th>{{Str::limit('Henry Ford Hospital', $limit=50, $end='')}}</th><th>(MED)</th><th>DWNL-PROC</th><tr>
<th>13-16555</th><th>{{Str::limit('Henry Ford Hospital', $limit=50, $end='')}}</th><th>(RAD)</th><th>FILMS-SCA</th><tr>
<th>13-16556</th><th>{{Str::limit('St John Hospital', $limit=50, $end='')}}</th><th>(MED)</th><th>DWNL-PD</th><tr>
<th>13-16557</th><th>{{Str::limit('St John Hospital', $limit=50, $end='')}}</th><th>(BIL)</th><th>RECS IN</th><tr>
<th>13-16558</th><th>{{Str::limit('St John Hospital', $limit=50, $end='')}}</th><th>(RAD)<th>FEDEX-SE</th><tr>
<th>13-16559</th><th>{{Str::limit('Hey Transporters', $limit=50, $end='')}}</th><th>(EMP)<th>CLOSED</th><tr>
<th>13-16560</th><th>{{Str::limit('Internal Revenue Service', $limit=50, $end='')}}</th><th>(TAX)<th>WAIT-PROB</th><tr>

</table>

@stop