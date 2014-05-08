@extends('layouts.create')
@section('content')

{{Session::get('nor_id')}}


{{ Form::open(array('route' => 'add_records', 'POST')) }}

{{ Form::label('type', 'Record Type') }}<br>
<select name="type">
@foreach($rec_type1 as $type)
<option value="{{  $type   }}"=>{{ $type }}<br>
@endforeach
</select>
<br>

{{ Form::label('quantity', 'Quantity:')  }}
{{ Form::text('quantity')}}

{{ Form::close() }}

@stop