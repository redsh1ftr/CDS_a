@extends('layouts.create')
@section('content')

{{Session::get('nor_id')}}

<table>

{{ Form::open(array('route' => 'add_records', 'POST')) }}
<td>
{{ Form::label('type', 'Record Type') }}:
<td>
<select name="type">
@foreach($rec_type1 as $type)

<option value="{{  $type   }}"=>{{ $type }}
@endforeach
</select>
<tr>
<td>
{{ Form::label('quantity', 'Quantity:')  }}
<td>
{{ Form::text('quantity')}}
</tr>
<td><td>{{Form::checkbox('with_invoice', '1');}}  {{ Form::label('with_invoice', 'Invoice Received') }}
</table>
{{ Form::submit('Check In Records')}}
{{ Form::close() }}

@stop