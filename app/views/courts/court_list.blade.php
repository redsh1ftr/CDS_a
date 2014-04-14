@extends('layouts.report')
@section('content')
<TABLE  BORDER="0"> <TH COLSPAN="3">
<tr><th>County</th><th>Court Number</th><th>Court Type</th>
@foreach($court_list1 as $court_list)
</tr>


<th>{{ link_to_route('court_profile', ($court_list->county), $court_list->id, array('id' => $court_list->id)); }}</th><th>{{$court_list->court_number }}</th><th>{{ $court_list->type }}</th>
@endforeach

@stop