@extends('layouts.report')
@section('content')

<h2>
	{{link_to_route('new_court', 'New Court') }}
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">


@foreach ($court_list1 as $court_info)

<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>

@if($court_link_type === 'Federal')
<ul>
{{link_to_route('court_profile', "$court_link_number United States $court_link_type Court", $court_info->id, array('id' => $court_info->id)); }}
</ul>
@else
<ul>
{{link_to_route('court_profile', "$court_link_number $court_link_type Court of $court_link_county County", $court_info->id, array('id' => $court_info->id)); }}
</ul>
@endif

@endforeach




@stop