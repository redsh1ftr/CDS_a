@extends('layouts.profile')
@section('content_left')

{{ Form::open(array('route' => 'create_new_firm', 'POST')) }}


<TABLE  BORDER="0"> <TH COLSPAN="2">

<tr><th>Firm Name:</th><th>{{ Form::text('name') }}</th></tr>

<tr><th>Address:</th><th>{{ Form::text('street1') }}</th></tr>

<tr><th>Address:</th><th>{{ Form::text('street2') }}</th></tr>

<tr><th>City:</th><th>{{ Form::text('city') }}</th></tr>

<tr><th>State:</th><th>{{ Form::text('state') }}</th></tr>

<tr><th>Zip:</th><th>{{ Form::text('zip') }}</th></tr>

<tr><th>Phone:</th><th>{{ Form::text('phone') }}</th></tr>

<tr><th>Fax:</th><th>{{ Form::text('fax') }}</th></tr>

<tr><th>Office Manager:</th><th>{{ Form::text('office_manager') }}</th></tr>

<tr><th>Office Manager Phone:</th><th>{{ Form::text('manager_phone') }}</th></tr>

<tr><th>Office Manager E-Mail:</th><th>{{ Form::text('manager_email') }}</th></tr>

</table>
Notes:<br>
{{ Form::textarea('info')}}<br>

{{ Form::hidden('created_user', 'Test ID') }}

  {{ Form::submit ('Create Firm') }}

    {{ Form::close() }}
@stop