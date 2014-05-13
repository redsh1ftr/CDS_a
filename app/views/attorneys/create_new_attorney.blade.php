@extends('layouts.profile')
@section('content_left')

{{ Form::open(array('route' => 'create_new_attorney', 'POST')) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">

Attorney Info:</th></tr>

<tr><th>First Name:</th><th>{{ Form::text('first_name') }}</th></tr>

<tr><th>Middle Name:</th><th>{{ Form::text('middle_name') }}</th></tr>

<tr><th>Last Name:</th><th>{{ Form::text('last_name') }}</th></tr>

<tr><th>Title:</th><th>

{{Form::select(
	'title', array('Mr.' => "Mr.",
	'Mrs.' => 'Mrs.',
	'Ms.' => 'Ms.')) }}</th></tr>	

<tr><th>P Number:</th><th>{{ Form::text('p_number') }}</th></tr>

<tr><th>E-mail:</th><th>{{ Form::text('atty_email') }}</th></tr>

<tr><th>Phone:</th><th>{{ Form::text('atty_phone') }}</th></tr>

<tr><th>Fax:</th><th>{{ Form::text('atty_fax') }}</th></tr>
<th>Preference: </th><th>
{{Form::select(
	'preference', array(
	'CD' => 'CD',
	'Paper' => 'Paper')) }}</th></tr>	


</table>
<br>
<table border="0"><th colspan="2">
Secretary Info:</th><tr>
<tr><th>First Name:</th><th>{{ Form::text('sec_first') }}</th></tr>

<tr><th>Middle Name:</th><th>{{ Form::text('sec_middle') }}</th></tr>

<tr><th>Last Name: </th><th> {{ Form::text('sec_last') }}</th></tr>

<tr><th>E-mail:</th><th>{{ Form::text('sec_email') }}</th></tr>

<tr><th>Phone:</th><th>{{ Form::text('sec_phone') }}</th></tr>

<tr><th>Fax:</th><th>{{ Form::text('sec_fax') }}</th></tr>

</table>
<br>
<table border="0"><th colspan="2">

<tr><th>Additional Notes:</tr>
</th><th>{{ Form::textarea('info') }}</th></tr>
  </table>


{{ Form::hidden('firm_id', $firm_id) }}

  {{ Form::submit ('Create Attorney') }}

    {{ Form::close() }}
@stop