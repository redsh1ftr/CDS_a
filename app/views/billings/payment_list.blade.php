@extends('layouts.profile')
@section('content_left')


<table width="100%" border="1">
<th>Job<th>Received<th>Invoice Number<th>Invoice Amount<tr>
@foreach($invoice_list1 as $invs)
<td>{{ link_to_route('make_payment', JobMain::where('id', '=', $invs->job_id)->pluck('job_number'), $invs->id, array('id' => $invs->id)); }}
<td>{{ Carbon::parse($invs->received)->format('D, M d Y') }}
<td>{{ $invs->invoice_number}}
<td>{{ $invs->invoice_amount}}



<tr>


@endforeach
<table>

@stop