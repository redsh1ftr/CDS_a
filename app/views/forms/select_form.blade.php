@extends('layouts.profile')
@section('content_left')

Status Letters {{link_to_route('make_status_letter', "Make a Status Letter")}} {{link_to('/stufftotest', 'Email Facebook Status to Kevin')}}
<hr>
@foreach($status as $stats)
{{link_to_route('status_letter', $stats->name, json_encode(array('lid' => $stats->id,  'jid' => $job)), array('id' => $job))}}<br>
@endforeach
@stop