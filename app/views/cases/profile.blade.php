@extends('layouts.report')
@section('content')
@foreach($case_list1 as $case_list)
<h3>
	<table width="600">
	<th>{{ HTML::link("//10.0.1.125/Records/$case_list->case_number/Documents", 'View Documents') }}</th><th>{{ HTML::link("//10.0.1.125/Records/$case_list->case_number/Records", 'View Records') }}</th></table>
</h3>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">

@foreach($case_list1 as $case_list)
<h1>
{{ $case_list->caption }} ( {{ $case_list->case_number }} ) <h3>
{{ Form::open(array('route' => 'change_case_status', 'POST')) }}
Status: 
{{Form::select(
	'status', array('Error' => $case_list->status,
	'Open' => 'Open',
	'Closed' => 'Closed',
	'Waiting' => 'Waiting',
	'Hold Records' => 'Hold',
	'Case Settled' => 'Settled')) }}
{{Form::hidden('case_status_id', $case_list->id)}}

  {{ Form::submit ('Change Status') }}
  @if($case_list->created_at != $case_list->updated_at) Status Changed: {{$case_list->updated_at}} by {{$case_list->updated_user}}</h3>
  @endif
    {{ Form::close() }}
</h3>
</h1>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">


<h3>
@foreach ($court_info1 as $court_info)

<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>


@if($court_link_type === 'Federal')
{{link_to_route('court_profile', "$court_link_number United States $court_link_type Court", $court_info->id, array('id' => $court_info->id)); }}
@else
{{link_to_route('court_profile', "$court_link_number $court_link_type Court of $court_link_county County", $court_info->id, array('id' => $court_info->id)); }}
@endif


@endforeach<br>
<TABLE  BORDER="0"> <TH COLSPAN="2"></tr>
<th>Judge:</th> <th> {{ $case_list->judge }}</th><tr>
<th>File Number:</th><th>	{{ $case_list->file_number }}</th></tr>
<th>Claim Number:</th><th>	{{ $case_list->claim_number }}</th><tr>
@if($case_list->discovery_date)
<th>Discovery Date:</th><th> {{ $case_list->discovery_date }}</th><tr>
@endif
</table>

</h3>
<HR WIDTH="80%" ALIGN="LEFT" COLOR="#000000" SIZE="2">




<br>

<h3>
Plaintiff:
</h3>

<h2>
{{ $case_list->plaintiff }}
</h2>
<h3>

	Plaintiff Attorney
</h3>
<HR WIDTH="80%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
<h3>
Defendant:
</h3>
<h2>
{{ $case_list->defendant }}<br><br>
</h2>
<h3>
	{{HTML::link('attorney/1', 'Christopher Smith')}}<br>
	Co-Defense Attorney 2<br>
	Co-Defense Attorney 3<br>


<br><br>
Notes:
<HR WIDTH="80%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
{{$case_list->info }}



@stop

@section('right')
<table width = "700">
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

@section('timestamper')

<h3>Created at: {{ $case_list->created_at}} by {{$case_list->created_user}} </h3><br>
@endforeach

@endforeach

@stop