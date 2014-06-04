@extends('layouts.profile')
@section('content_left')


{{ Session::get('nor') }} {{Session::get('rush')}} {{Session::get('requester')}} {{Session::get('recieved')}}
<h2>
	<table width="100%">
	<td>{{link_to_route('new_deponent', 'New Deponent') }} <td>{{link_to_route('case_profile', 'Back to Case', array('id' => Session::get('case_id')))}}
</table>
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">

{{ Form::open(array('route' => 'deponent_search_name', 'POST')) }}
	{{ Form::text('search_name') }}  {{ Form::submit ("Search Name") }}
{{ Form::close() }}

@foreach($dep_list1 as $dep )
{{link_to_route('deponent_selected', $dep->name, $dep->id, array('id' => $dep->id)); }}<br>
@endforeach


@stop

@section('content_right')
Current Jobs for {{CaseMain::where('id', '=', Session::get('case_id'))->pluck('case_number')}}:
<HR WIDTH="100%" COLOR="#000000" SIZE="3">

<table width="100%">
<th>Job Number<th>Deponent<th>Job Type</th><tr>
@foreach($made_jobs1 as $made)

<td>{{$made->job_number}} 
<td>{{DeponentMain::where('id', '=', $made->deponent_id)->pluck('name')}}
<td>{{$made->type}}<tr>

@endforeach
</table>
@stop
