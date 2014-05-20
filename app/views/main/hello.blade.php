@extends('layouts.default')
@section('content')

		<h1>
			C D Services Inc<br><br>
			<img src="http://www.cdsrecords.net/images/CDS.png"/><br>
			</h1><br>


{{ Form::open(array('route' => 'login_home', 'method' => 'post')) }}

<table>
 <td> Username:<td>{{ Form::text('username') }}<tr>
  <td>Password: <td>{{ Form::text('password') }}<tr>
  </table>
   {{ Form::submit ('Log In') }}

    {{ Form::close() }}
   
@stop