@extends('layouts.report')
@section('toolbar')

@foreach($nor1 as $nor)
{{link_to_route('new_case', 'New Job', $nor1->id, array('id' => $nor1->id)); }} {{ Form::open(array('url' => '//localhost/CDS_a/PDF/pdf/download.php', 'POST')) }}


<?php $nor_auth_name = "$nor1->first_name. $nor1->middle_name. $nor1->last_name";?>

{{ Form::hidden('first_name', $nor_auth_name) }}
{{ Form::hidden('last_name', $nor1->ssn) }}
{{ Form::submit('Create SSA Auth!') }}
{{ Form::close()}}
<HR WIDTH="100%" COLOR="#000000" SIZE="2">
@stop

{{ $attorney_case->id }}


@section('content')


<br>
Notes:
<br>
{{ $nor1->info }}

<br>
<br>







{{link_to_route('case_profile', 'Back to Case', $nor1->case_id, array('id' => $nor1->id)); }}
@endforeach
@stop