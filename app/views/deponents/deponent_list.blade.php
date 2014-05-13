@extends('layouts.profile')
@section('content_left')

<h2>
	{{link_to_route('new_deponent', 'New Deponent') }}
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">

{{ Form::open(array('route' => 'deponent_search_name', 'POST')) }}
	{{ Form::text('search_name') }}  {{ Form::submit ("Search Name") }}
{{ Form::close() }}

@foreach($dep_list1 as $dep )

{{link_to_route('deponent_profile', $dep->name, $dep->id, array('id' => $dep->id)); }}<br>

@endforeach


@stop
