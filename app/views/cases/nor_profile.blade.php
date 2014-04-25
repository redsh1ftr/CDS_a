@extends('layouts.report')
@section('toolbar')

@foreach($nor1 as $nor) 
{{link_to_route('new_case', 'New Job', $nor->id, array('id' => $nor->id)); }} 
@endforeach


<HR WIDTH="100%" COLOR="#000000" SIZE="2">
	
@stop

@foreach($nor1 as $nor) 


@section('content')

@foreach($attorney_case as $case)
@foreach($ssa_auth as $auth)



{{ Form::open(array('url' => '//localhost/CDS_a/PDF/pdf/download.php', 'POST')) }}

<?php $ssa_name = "$nor->first_name $nor->middle_name $nor->last_name" ?>

{{$auth->field6_data}}


{{ Form::hidden('field1_name', $auth->field1_name) }}
{{ Form::hidden('field1_data', $ssa_name) }}


{{ Form::hidden('field2_name', $auth->field2_name) }}
{{ Form::hidden('field2_data', $nor->dob) }}

{{ Form::hidden('field3_name', $auth->field3_name) }}
{{ Form::hidden('field3_data', $nor->ssn) }}

{{ Form::hidden('field4_name', $auth->field4_name) }}
{{ Form::hidden('field4_data', $auth->field4_data) }}

{{ Form::hidden('field5_name', $auth->field5_name) }}
{{ Form::hidden('field5_data', $auth->field5_data) }}

{{ Form::hidden('field6_name', $auth->field6_name) }}
{{ Form::hidden('field6_data', $auth->field6_data) }}

{{ Form::hidden('field7_name', $auth->field7_name) }}
{{ Form::hidden('field7_data', $auth->field7_data) }}

{{ Form::hidden('field8_name', $auth->field8_name) }}
{{ Form::hidden('field8_data', $auth->field8_data) }}

{{ Form::hidden('field9_name', $auth->field9_name) }}
{{ Form::hidden('field9_data', $auth->field9_data) }}

{{ Form::hidden('field10_name', $auth->field10_name) }}
{{ Form::hidden('field10_data', $auth->field10_data) }}

{{ Form::hidden('field11_name', $auth->field11_name) }}
{{ Form::hidden('field11_data', $auth->field11_data) }}

{{ Form::hidden('field12_name', $auth->field12_name) }}
{{ Form::hidden('field12_data', $auth->field12_data) }}

{{ Form::hidden ('document', 'ssa') }}
{{ Form::submit('Create SSA Auth!') }}
{{ Form::close()}}

{{ Form::open(array('url' => '//localhost/CDS_a/PDF/pdf/download.php', 'POST')) }}
{{ Form::hidden ('document', 'example') }}
{{ Form::hidden('field1_name', 'firstname')}}
{{ Form::hidden('field1_data', 'Steve') }}
{{ Form::hidden('field2_name', 'lastname') }}
{{ Form::hidden('field2_data', 'Klamer') }}
{{ Form::hidden ('document', 'example') }}
{{ Form::submit('Create SSA Auth!') }}
{{ Form::close()}}


<br>
<br>







{{link_to_route('case_profile', 'Back to Case', $nor->case_id, array('id' => $nor->id)); }}
@endforeach
@endforeach
@endforeach
@stop