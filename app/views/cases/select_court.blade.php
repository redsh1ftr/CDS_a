@extends('layouts.profile')
@section('content_left')
@foreach ($court_list1 as $court_info)


<h2>
	{{link_to_route('new_court', 'New Court') }}
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">

<h2>Please select a court below:</h2>
<HR WIDTH="50%" ALIGN ="LEFT" COLOR="#000000" SIZE="2">
<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>

@if($court_link_type === 'Federal')
{{link_to_route('selected_court', "$court_link_number United States $court_link_type Court", $court_info->id, array('id' => $court_info->id)); }}
@else
{{link_to_route('selected_court', "$court_link_number $court_link_type Court of $court_link_county County", $court_info->id, array('id' => $court_info->id)); }}
@endif

@endforeach
@stop