@extends('layouts.report')
@section('content')
@foreach($call_list1 as $call_list)
<h1>
{{ $call_list->business_name }}
</h1>

{{ $call_list->street	}}<br>
{{ $call_list->city }} {{ $call_list->zip }}<br>
{{ $call_list->phone }}<br>
{{ $call_list->created_at }}<br><br>

Notes:<br>
{{ $call_list->call_notes }}

@endforeach
<br><br><br>
Followup Calls:
<br>

<TABLE  BORDER="0"> <TH COLSPAN="2">
{{ Form::open(array('route' => 'logfollowupnotes', 'POST')) }}
<tr><th>Add more Notes:</th><th>{{ Form::textarea('call_notes') }}</th></tr>

  </table>

  {{ Form::submit ('Log Call') }}
  
@stop