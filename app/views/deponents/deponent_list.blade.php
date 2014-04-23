@extends('layouts.report')
@section('content')



<h2>
	{{link_to_route('new_deponent', 'New Deponent') }}
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">

@foreach($dep_list1 as $dep )

{{link_to_route('deponent_profile', $dep->name, $dep->id, array('id' => $dep->id)); }}

@endforeach

@stop
