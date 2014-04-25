@extends('layouts.create')
@section('content')


{{ Form::open(array('route' => 'create_new_nor', 'POST')) }}


@foreach($attorney_case as $case)
Enter more information for {{ $case->person}}:
{{ Form::hidden('case_id', $case->id)}}
{{ Form::hidden('nor_id', $nor_id)}}



<br><br>
<TABLE  BORDER="0">

<td>
	{{ Form::label('first_name', $case->person) }}
<td>
	{{ Form::text('first_name') }} 
<tr>
@endforeach
<td>
	{{ Form::label('middle_name', 'Middle Name') }}
<td>
	{{ Form::text('middle_name') }}
<tr>


<td>
	{{ Form::label('last_name', '') }}
<td>
	{{ Form::text('last_name') }}
<tr>

<td>
	{{ Form::label('dob', '') }}
<td>
	{{ Form::text('dob') }}
<tr>

<td>
	{{ Form::label('ssn', '') }}
<td>
	{{ Form::text('ssn') }}
<tr>

<td>
	{{ Form::label('email', '') }}
<td>
	{{ Form::text('email') }}
<tr>

<td>
	{{ Form::label('phone', '') }}
<td>
	{{ Form::text('phone') }}
<tr>

<td>
	{{ Form::label('street1', '') }}
<td>
	{{ Form::text('street1') }}
<tr>

<td>
	{{ Form::label('street2', '') }}
<td>
	{{ Form::text('street2') }}
<tr>

<td>
	{{ Form::label('city', '') }}
<td>
	{{ Form::text('city') }}
<tr>

<td>
	{{ Form::label('state', '') }}
<td>
	{{ Form::text('state') }}
<tr>

<td>
	{{ Form::label('zip', '') }}
<td>
	{{ Form::text('zip') }}
<tr>
</table>




	{{ Form::label('info', 'Notes:') }}<br>
	{{ Form::textarea('info') }}<br><br>

	

 {{ Form::submit("Update NOR") }}


    {{ Form::close() }}

 

@stop