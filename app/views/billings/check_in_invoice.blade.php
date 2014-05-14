@extends('layouts.profile')
@section('content_left')


<table>

{{ Form::open(array('route' => 'add_invoice', 'POST')) }}
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