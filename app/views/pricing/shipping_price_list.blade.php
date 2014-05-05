@extends('layouts.report')
@section('content')


<table width=75%>
<td>Pages<td>Cost<tr>
<td>{{$shipping->tier1 }}<td> {{ $shipping->tier1_price}}<tr>
<td>{{$shipping->tier2 }}<td> {{ $shipping->tier2_price}}<tr>
<td>{{$shipping->tier3 }}<td> {{ $shipping->tier3_price}}<tr>
<td>{{$shipping->tier4 }}<td> {{ $shipping->tier4_price}}<tr>
<td>{{$shipping->tier5 }}<td> {{ $shipping->tier5_price}}<tr>
<td>{{$shipping->tier6 }}<td> {{ $shipping->tier6_price}}<tr>
<td>{{$shipping->tier7 }}<td> {{ $shipping->tier7_price}}<tr>
<td>{{$shipping->tier8 }}<td> {{ $shipping->tier8_price}}<tr>
<td>{{$shipping->tier9 }}<td> {{ $shipping->tier9_price}}<tr>
<td>{{$shipping->tier10 }}<td> {{ $shipping->tier10_price}}<tr>
<td>{{$shipping->tier11 }}<td> {{ $shipping->tier11_price}}<tr>
<td>{{$shipping->tier12 }}<td> {{ $shipping->tier12_price}}<tr>
<td>{{$shipping->tier13 }}<td> {{ $shipping->tier13_price}}<tr>
<td>{{$shipping->tier14 }}<td> {{ $shipping->tier14_price}}<tr>
<td>{{$shipping->tier15 }}<td> {{ $shipping->tier15_price}}<tr>
<td>Requester<td>{{$shipping->requester_price}}
</table>





@stop
