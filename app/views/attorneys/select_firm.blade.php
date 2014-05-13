@extends('layouts.profile')
@section('content_left')
@foreach ($firm_list1 as $firm_list)


{{link_to_route('selected_firm', $firm_list->name, $firm_list->id, array('id' => $firm_list->id)); }}<br>


@endforeach
@stop