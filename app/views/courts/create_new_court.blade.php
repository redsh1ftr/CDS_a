@extends('layouts.report')
@section('content')

{{ Form::open(array('route' => 'create_new_court', 'POST')) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">

<tr><th>Court Type:</th><th>{{Form::select('type', array('District' => 'Judicial District', 'Circuit' => 'Judicial Circuit', 'Probate' => 'County Probate', 'Federal' => 'Federal')) }} </th></tr>

<tr><th>Court Number:</th><th>{{ Form::text('court_number') }}</th></tr>

<tr><th>Address:</th><th>{{ Form::text('street1') }}</th></tr>

<tr><th>Address:</th><th>{{ Form::text('street2') }}</th></tr>

<tr><th>County:</th><th>{{ Form::text('county') }}</th></tr>

<tr><th>City:</th><th>{{ Form::text('city') }}</th></tr>

<tr><th>State:</th><th>{{ Form::text('state') }}</th></tr>

<tr><th>Zip:</th><th>{{ Form::text('zip') }}</th></tr>

<tr><th>Phone:</th><th>{{ Form::text('phone') }}</th></tr>

<tr><th>Fax:</th><th>{{ Form::text('fax') }}</th></tr>

<tr><th>Additional Information:</th><th>{{ Form::textarea('info') }}</th></tr>

  </table>

  {{ Form::submit ('Add Court') }}

    {{ Form::close() }}
@stop