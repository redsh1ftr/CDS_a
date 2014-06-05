@extends('layouts.profile')
@section('content_left')

To use a deponent name type $deponent->name<br>

{{ Form::open(array('route' => 'make_status_letter', 'POST')) }}
<table width=100%>

<td>{{Form::label('name', 'Name')}}
<td>{{Form::text('name')}}<tr>

<td>{{Form::label('verbiage', 'Verbiage')}}
<td>{{Form::textarea('verbiage')}}<tr>

<td>{{Form::label('response', 'Response')}}
<td>{{Form::textarea('response', $stat->response)}}<tr>

</table>
<br><br>

{{Form::submit('Make!')}}


{{Form::close()}}
@stop