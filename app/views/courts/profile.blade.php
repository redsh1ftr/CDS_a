@extends('layouts.profile')
@section('content_left')
@foreach($court_list1 as $court_list)
<h1>
<?php $court_link_number = $court_list->court_number; ?>
<?php $court_link_type = $court_list->type; ?>
<?php $court_link_county = $court_list->county; ?>

@if($court_link_type === 'Federal')
{{ "$court_link_number United States $court_link_type Court" }}
@else
{{ "$court_link_number $court_link_type Court of $court_link_county County" }}
@endif
</h1>
<h2>
{{ $court_list->street1 }}; {{$court_list->street2}}<br>
{{ $court_list->city }} {{$court_list->state}}, {{$court_list->zip}}
<br>
</h2>
<h3>
<table>
<th>Phone: </th><th>{{ $court_list->phone }} </th></tr>
<th>Fax:</th><th> {{$court_list->fax }}</th><tr></table>
</h3>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">
<h3>
Notes:<br>
{{$court_list->info}}<br>
</h3>
@endforeach

  
@stop
@section('timestamper')
@foreach($court_list1 as $court_list)
Created by
{{$court_list->created_user}} at {{$court_list->created_at}}

@endforeach

@stop