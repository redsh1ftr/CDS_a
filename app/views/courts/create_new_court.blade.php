@extends('layouts.report')
@section('content')

{{ Form::open(array('url' => '/court/new/create', 'POST')) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">

<tr><th>Court Type:</th><th>{{Form::select('type', array('Judicial District' => 'District', 'Judicial Circuit' => 'Circuit', 'County Probate' => 'Probate', 'Federal' => 'Federal')) }} </th></tr>

<tr><th>:</th><th>{{ Form::text('case_number') }}</th></tr>

<tr><th>Date Received:</th><th>{{ Form::text('date_received') }}</th></tr>

<tr><th>Discovery Date:</th><th>{{ Form::text('discovery_date') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>:</th><th>{{ Form::text('') }}</th></tr>

<tr><th>Date Received:</th><th>{{Form::select('business_type', array('Residential' => 'Residential', 'Commercial' => 'Commercial', 'Medical' => 'Medical')) }} </th></tr>

<tr><th>Contact Name:</th><th>{{ Form::text('first_name') }} {{ Form::text('last_name') }}</th></tr>

<tr><th>Office Manager:</th><th>{{ Form::text('office_manager') }}(optional)</th></tr>

<tr><th>Street:</th><th>{{ Form::text('street1') }} Suite #:{{ Form::text('street2') }}</th></tr>

<tr><th>City:</th><th>{{ Form::text('city') }}</th></tr>

<tr><th>Zip:</th><th>{{ Form::text('zip')}}</th></tr>

<tr><th>Hours:</th><th>{{ Form::text('hours') }}</th></tr>

<tr><th>Phone Number:</th><th>{{ Form::text('phone') }}</th></tr>

<tr><th>Fax Number:</th><th>{{ Form::text('fax') }}</th></tr>

<tr><th>Email:</th><th>{{ Form::text('email') }}</th></tr>

<tr><th>Notes:</th><th>{{ Form::textarea('notes') }}</th></tr>


  </table>

  {{ Form::submit ('Create Client') }}

    {{ Form::close() }}
@stop