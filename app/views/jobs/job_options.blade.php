@extends('layouts.create')
@section('content')

{{Cache::get('nor_id')}}


{{ Form::open(array('route' => 'requester_selected', 'POST')) }}
{{ Form::select('type', array(Cache::get('nor_id'))) }}

{{ Form::label('films', 'Need Films ') }} {{Form::checkbox('films', '1');}}<br>
{{ Form::label('films', 'Need Films ') }} {{Form::checkbox('films', '1');}}<br>
{{ Form::label('films', 'Need Films ') }} {{Form::checkbox('films', '1');}}<br>
{{ Form::label('films', 'Need Films ') }} {{Form::checkbox('films', '1');}}<br>
{{ Form::label('films', 'Need Films ') }} {{Form::checkbox('films', '1');}}<br>
{{ Form::label('recieved', 'Date Recieved:') }}<br>
{{ Form::text('recieved') }}

{{ Form::label('rush', 'Rush Request ') }} {{Form::checkbox('rush', '1');}}
<br><br>




	

<br><br> {{ Form::submit("Select Deponent") }}


    {{ Form::close() }}

 

@stop