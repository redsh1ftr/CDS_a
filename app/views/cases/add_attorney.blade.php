@extends('layouts.create')
@section('content')

{{ Form::open(array('route' => 'add_case_attorney', 'POST')) }}
<TABLE  BORDER="0">

<td>
	{{ Form::label('person', 'Plaintiff or Defendant') }}
<td>
	{{ Form::text('person') }} NOR?{{Form::checkbox('nor', '1');}}
<tr>

<td>
	{{ Form::label('attorney_id', 'Attorney P#') }}
<td>
	{{ Form::text('attorney_id') }}
<tr>


<td>
	{{ Form::label('side', 'Side') }}
<td>
{{Form::select(
	'side', array('Plaintiff' => 'Plaintiff',
	'Defendant' => 'Defendant')) }}
<tr>
</table>   
@foreach($case_list1 as $case_list)
<?php $case_number = $case_list->case_number?>
{{ Form::hidden('case_id', $case_list->id) }}
@endforeach  

{{ Form::hidden('user_entered_id', 'Test ID') }}


 {{ Form::submit ("Add to $case_number") }}


    {{ Form::close() }}

 

@stop