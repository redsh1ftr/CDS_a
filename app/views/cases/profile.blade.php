@extends('layouts.report')
@section('content')

@foreach($case_list1 as $case_list)
<h1>
{{ $case_list->caption }} ( {{ $case_list->case_number }} ) <br>
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
    {{ Form::close() }}
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
<HR WIDTH="100%" COLOR="#000000" SIZE="2">




<br>

<h3>
Plaintiff:
</h3>
<h2>
{{ $case_list->plaintiff }}<br><br>

</h2>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">
<h3>
Defendant:
</h3>
<h2>
{{ $case_list->defendant }}<br><br>
</h2>


<h3>Created at: {{ $case_list->created_at}} </h3><br>
@endforeach



@stop