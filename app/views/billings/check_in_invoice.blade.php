@extends('layouts.create')
@section('content')


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
 <br>

</table>
{{ Form::close() }}

@stop