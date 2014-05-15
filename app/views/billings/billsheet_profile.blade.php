@extends('layouts.profile')
<?php $costsum = 0; ?>
@foreach($records_list1 as $records)
<?php $costsum+= $records->quantity * (RecTypeMain::where('type', '=', $records->type)->pluck('price'));?>
@endforeach

@section('content_left')
<table>
<td>	
Court:
<td>
@foreach($court_list1 as $court_info)
<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>


@if($court_link_type === 'Federal')
{{link_to_route('court_profile', "$court_link_number United States $court_link_type Court", $court_info->id, array('id' => $court_info->id)); }}
@else
{{link_to_route('court_profile', "$court_link_number $court_link_type Court of $court_link_county County", $court_info->id, array('id' => $court_info->id)); }}
@endif
@endforeach
<tr>
<td>	
Deponent:
<td> 
@foreach($deponent_list1 as $deponent)
{{link_to_route('deponent_profile', $deponent->name, $deponent->id, array('id' => $deponent->id)); }}
@endforeach

<tr>
<td>
Name on Record:
<td>
@foreach($nor_list1 as $nor)
<?php $nor_first = $nor->first_name;?>
<?php $nor_middle = $nor->middle_name;?>
<?php $nor_last = $nor->last_name;?>

{{link_to_route('nor_profile', "$nor_first $nor_middle $nor_last", $nor->id, array('id' => $nor->id)); }}

@endforeach

<tr>
@foreach($case_list1 as $case)
@if($case->claim_number)
<td>
Claim:
<td>
{{$case->claim_number}}
<tr>
@endif
<td>
Mini-Caption:
<td>
{{link_to_route('case_profile', $case->caption, $case->id, array('id' => $case->id)); }}
@endforeach
<td>

</table>




@stop

@section('content_right')
<table>
<td>
Job Number: 
<td>
@foreach($job_list1 as $job)
{{link_to_route('job_profile', $job->job_number, $job->id, array('id' => $job->id)); }}
<tr>
<td>
Records Due:
<td>
{{$job->records_due}}
<tr>
<td>
Requester Cost:
<td>
{{$costsum + 39.50 + .25}}
<tr>
@endforeach
<tr>
</table>
@stop


@section('last')

<HR WIDTH="100%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
<table width="100%">


<?php $sum = 0; ?>
@foreach($records_list1 as $records)
<?php $sum+= $records->quantity * (RecTypeMain::where('type', '=', $records->type)->pluck('price'));?>
<td>
{{ $records->received }}<td>
{{ $records->type }}<td>
{{ $records->quantity}}<td>
<tr>

@endforeach
</table>
@foreach($job_attorneys as $attys)
{{AttorneyMain::where('id', '=', $attys)->pluck('first_name') }} {{ AttorneyMain::where('id', '=', $attys)->pluck('last_name') }}<br>
@endforeach

<br><br>
@stop