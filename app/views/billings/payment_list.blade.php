@extends('layouts.finance')


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
</table>

@stop

@section('content_right')

<?php $paid_inv = DB::table('invoice_list')->where('payment', '!=', '')->where('paid', '>=', Carbon::today())->orderBy('paid')->get();?>


<h2>Checks Paid Today:</h2>
<table width="100%" border="1">
<th>Job<th>Received<th>Amount<th>Invoice Number<th>Paid<tr>
@foreach($paid_inv as $inv)

<td>{{link_to_route('job_profile', JobMain::where('id', '=', $inv->job_id)->pluck('job_number'), $inv->job_id, array('id', 'id' => $inv->job_id))}}
<td>{{Carbon::parse($inv->received)->format('D, M d Y')}}
<td>{{$inv->invoice_amount}}
<td>{{$inv->invoice_number}}
<td>{{Carbon::parse($inv->paid)->format('D, M d Y')}}<tr>

@endforeach

</table>


@stop
