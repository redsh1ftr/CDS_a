@extends('layouts.create')
@section('content')

{{Session::get('nor_id')}}


{{ Form::open(array('route' => 'requester_selected', 'POST')) }}

{{ Form::label('recieved', 'Date Recieved:')  }}<br>
{{ Form::text('recieved')}}

{{ Form::label('rush', 'Rush Request ') }} {{Form::checkbox('rush', '1');}}
<br><br>



Select Requester:<br>

@foreach($atty as $atty1)

<?php $attyname = AttorneyMain::where('p_number', '=', $atty1)->pluck('last_name');?>
<?php $attyp = AttorneyMain::where('p_number', '=', $atty1)->pluck('p_number');?>
<?php $attyid = AttorneyMain::where('p_number', '=', $atty1)->pluck('id');?>

{{Form::radio('requester', $attyid) }} {{ "$attyname (P$attyp)" }} <br>


@endforeach

<br><br>

Select Name on Record:<br>

@foreach($nors as $nor1)
{{Form::radio('nor', $nor1->id) }} {{ "$nor1->first_name $nor1->last_name" }} <br>
@endforeach



{{form::hidden('case_id', $case_id) }}


	

<br><br> {{ Form::submit("Select Deponent") }}


    {{ Form::close() }}

 

@stop