@extends('layouts.report')
@section('content')
@foreach($court_list1 as $court_list)
<h1>

<?php $court_link_number = $court_list->court_number; ?>
<?php $court_link_type = $court_list->type; ?>
<?php $court_link_county = $court_list->county; ?>

@if($court_link_type === 'Federal')
<ul>
{{ "$court_link_number United States $court_link_type Court" }}
</ul>
@else
<ul>
{{ "$court_link_number $court_link_type Court of $court_link_county County" }}
</ul>
@endif
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