@extends('layouts.report')
@section('content')
@foreach($court_list1 as $court_list)
<h1>
{{ $court_list->court_number }} {{$court_list->type }} Court of  {{$court_list->county}} County
</h1><br><br>

<h3>
{{ $court_list->street1 }}; {{$court_list->street2}}<br>

{{ $court_list->city }} {{$court_list->state}}, {{$court_list->zip}}
<br><br>

Phone: {{ $court_list->phone }} <br>
Fax: {{$court_list->fax }} <br><br><br>

Notes:<br>
{{$court_list->info}}<br>
</h3>
@endforeach
  
@stop