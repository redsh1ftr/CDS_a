@extends('layouts.default')
@section('content')

		<h1>
			C D Services Inc<br><br>
			<img src="http://www.cdsrecords.net/images/CDS.png"/><br>
			</h1><br>

{{ Form::open(array('url' => '/case/list/all', 'method' => 'GET')) }}
  Username:{{ Form::text('username') }}<br>
  Password: {{ Form::text('password') }}<br>
   {{ Form::submit ('Log In') }}

    {{ Form::close() }}
@stop