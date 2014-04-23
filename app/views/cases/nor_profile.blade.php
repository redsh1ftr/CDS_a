@extends('layouts.report')
@section('toolbar')
{{link_to_route('new_case', 'New Job', $nor1->id, array('id' => $nor1->id)); }}
<HR WIDTH="100%" COLOR="#000000" SIZE="2">
@stop

@section('content')




{{ $nor1->first_name }} {{ $nor1->middle_name }} {{ $nor1->last_name }}<br>


@if($nor1->street2) {{ $nor1->street1 }}, {{ $nor1->street2 }}<br>
@else {{ $nor1->street1 }}<br>
@endif

{{ $nor1->city }} {{ $nor1->state }}, {{ $nor1-> zip}}<br><br>

{{ $nor1->dob }}<br>
{{ $nor1->ssn }}<br>
{{ $nor1->phone }}<br>
{{ $nor1->email }}<br>

<br>
Notes:
<br>
{{ $nor1->info }}

<br>
<br>







{{link_to_route('case_profile', 'Back to Case', $nor1->case_id, array('id' => $nor1->id)); }}

@stop