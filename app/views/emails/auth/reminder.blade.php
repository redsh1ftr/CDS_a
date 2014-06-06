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

			{{Mail::send('forms.status_letter', array('jid' => '1', 'lid' => '1'), function($message)
{
  $message->to('it@cdservicesinc.com', 'Joe Tavares')
          ->subject('Status Letter');
});}}
		</div>
	</body>
</html>
@stop