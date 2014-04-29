@extends('layouts.report')


@section('toolbar')
Currently Making Jobs for:<br>


@foreach($case as $cas)
Case: {{$cas->case_number}}<br>
@endforeach

@foreach($requester as $req )
Requester: {{ $req->first_name }} {{ $req->middle_name }} {{ $req->last_name }} (P{{$req->p_number}})<br>
@endforeach

@foreach($nor as $nors)
NOR: {{ $nors->first_name  }} {{$nors->middle_name}} {{ $nors->last_name }} <br>
@endforeach

@if(Cache::get('rush'))Rush
@endif
<HR WIDTH="100%" COLOR="#000000" SIZE="3">


@stop

@section('content')

Deponent:<br>
@foreach($dep_list1 as $dep_list)
<h2>{{ $dep_list->name}}</h2><br>
@if($dep_list->street2){{$dep_list->street1 }}, {{$dep_list->street2}}<br>
@else {{$dep_list->street1}}<br>
@endif
{{$dep_list->city}}{{$dep_list->state}}, {{$dep_list->zip}}<br><br>
@endforeach


{{ Form::open(array('route' => 'make_job', 'POST')) }}








{{ Form::label('type', 'Job Type') }}<br>
<select name="type">
@foreach($jobtypes as $jobtype)
<option value="{{  $jobtype   }}"=>{{ $jobtype }}<br>
@endforeach
</select>



<br><br>
{{Form::checkbox('add_info', '1');}} {{ Form::label('add_info', 'Need Additional Info ') }} <br>
{{Form::checkbox('auths', '1');}} {{ Form::label('auths', 'Need Auths ') }} <br>
{{Form::checkbox('films', '1');}} {{ Form::label('films', 'Need Films ') }} <br>
{{Form::checkbox('billing', '1');}} {{ Form::label('billing', 'Need Billing ') }} <br>


@foreach($dep_list1 as $dep_list)
{{Form::hidden('deponent_id', $dep_list->id) }}
@endforeach
	

<br><br> {{ Form::submit("Save and New Job") }}


    {{ Form::close() }}

 

@stop




@stop








