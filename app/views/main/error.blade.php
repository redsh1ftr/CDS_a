@extends('layouts.lookup1')
@section('content')


	@foreach ($billing_contact as $billing_contacts)
	<li>{{	$billing_contacts->billing_company 	}}</li>
	@endforeach


<h1>
	Look up Billing Contact by:<br><br>
	<form action="billing/profile">
		BY Client Number: 	
	<input type="submit"><br>
		BY Business Name:
		<br>
		BY Billing Contact Name:
		<br>
		<form action="billing/new">
		BY Billing Company:<input type="text" name="billing_company">	
	<input type="submit"><br>

</form
			
	
</form>
<form action="billing/new">
		NEW Billing Contact: <input type="text" name="check_billing_company">	
	<input type="submit"><br>

</form
</h1>
@stop

lookup_billing<br>
look for billing contacts