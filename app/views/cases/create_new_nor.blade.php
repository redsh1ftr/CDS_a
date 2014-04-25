@extends('layouts.create')
@section('content')


{{ Form::open(array('route' => 'create_new_nor', 'POST')) }}


@foreach($attorney_case as $case)
<<<<<<< HEAD
Enter more information for {{ $case->person }}:
{{ Form::hidden('case_id', $case->id)}}
=======
Enter more information for {{ $case->person}}:
{{ Form::hidden('case_id', $case->case_id)}}
>>>>>>> b9f83cccd42eb256268947212a0bf172d4dc1896
{{ Form::hidden('nor_id', $nor_id)}}
@endforeach


<br><br>
<TABLE  BORDER="0">

<td>
	{{ Form::label('first_name', 'First Name') }}
<td>
	{{ Form::text('first_name') }} 
<tr>

<td>
	{{ Form::label('middle_name', 'Middle Name') }}
<td>
	{{ Form::text('middle_name') }}
<tr>


<td>
	{{ Form::label('last_name', 'Last Name') }}
<td>
	{{ Form::text('last_name') }}
<tr>

<td>
	{{ Form::label('dob', 'Date of Birth') }}
<td>
	{{ Form::text('dob') }}
<tr>

<td>
	{{ Form::label('ssn', 'SSN') }}
<td>
	{{ Form::text('ssn') }}
<tr>

<td>
	{{ Form::label('email', 'E-mail') }}
<td>
	{{ Form::text('email') }}
<tr>

<td>
	{{ Form::label('phone', 'Phone') }}
<td>
	{{ Form::text('phone') }}
<tr>

<td>
	{{ Form::label('street1', 'Address') }}
<td>
	{{ Form::text('street1') }}
<tr>

<td>
	{{ Form::label('street2', 'Address') }}
<td>
	{{ Form::text('street2') }}
<tr>

<td>
	{{ Form::label('city', 'City') }}
<td>
	{{ Form::text('city') }}
<tr>

<td>
	{{ Form::label('state', 'State') }}
<td>
	{{ Form::text('state') }}
<tr>

<td>
	{{ Form::label('zip', 'Zip') }}
<td>
	{{ Form::text('zip') }}
<tr>
</table>




	{{ Form::label('info', 'Notes:') }}<br>
	{{ Form::textarea('info') }}<br><br>

	

 {{ Form::submit("Update NOR") }}


    {{ Form::close() }}

 

@stop