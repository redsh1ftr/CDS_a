@extends('layouts.profile')
@section('last')
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			To reset your password, complete this form: 

			{{Mail::send('cases.case_list', array('case_list1' => CaseMain::get(), 'pagetitle' => 'CASES'), function($message)
{
  $message->to('roset@cdservicesinc.com', 'Rose Tavares')
          ->subject('DEMO CASE LIST');
});}}
		</div>
	</body>
</html>
@stop