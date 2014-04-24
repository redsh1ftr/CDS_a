@extends('layouts.create')
@section('content')

{{ Form::open(array('route' => 'create_new_deponent', 'POST')) }}
<TABLE  BORDER="0">

<td>
	{{ Form::label('name', 'Deponent Name') }}
<td>
	{{ Form::text('name') }}
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

<td>
	{{ Form::label('type', 'Type of Deponent') }}
<td>
	{{ Form::text('type') }}
<tr>

<td>
	{{ Form::label('contact', 'Primary Contact') }}
<td>
	{{ Form::text('contact') }}
<tr>

<td>
	{{ Form::label('phone', 'Phone') }}
<td>
	{{ Form::text('phone') }}
<tr>

<td>
	{{ Form::label('fax', 'Fax') }}
<td>
	{{ Form::text('fax') }}
<tr>

<td>
	{{ Form::label('email', 'E-mail') }}
<td>
	{{ Form::text('email') }}
<tr>

<td>
	{{ Form::label('fee', 'Fee') }}
<td>
	{{ Form::text('fee') }}
<tr>

<td>
	{{ Form::label('films', 'Has Films') }}
<td>
	{{Form::checkbox('films', 'Yes')}}
<tr>



<td>
	{{ Form::label('copy_service', 'Copy Service') }}
<td>
{{Form::select(
	'copy_service', array('Facility' => 'Facility',
	'Healthport' => 'Healthport',
	'MRO' => 'MRO')) }}
<tr>
</table>   


	{{ Form::label('info', 'Notes:') }}
<br>
	{{ Form::textarea('info') }}
<br><br>


 {{ Form::submit ("Create Deponent") }}
<br><br><br><br><br><br>

    {{ Form::close() }}

 

@stop