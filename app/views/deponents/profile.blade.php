@extends('layouts.profile')





@section('topbar')

Link bar<br>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">

<br>
@stop


@section('content_left')

<div class="lefttext">
@foreach($dep1 as $dep)
<h2>
{{$dep->name}}
</h2><br>
@if($dep->stree2) {{ $dep->street1 }}, {{ $dep->street2 }}<br>
@else {{$dep->street1 }}<br>
@endif

{{$dep->city }} {{ $dep->state}}, {{ $dep->zip }}<br>
<br>
<TABLE ALIGN="left"> <TH COLSPAN="2"></tr>
<td>Phone: <td> {{$dep->phone }}<tr>
<td>Fax: <td> {{ $dep->fax }}<tr>
</table>
<HR WIDTH="100%" COLOR="#000000" SIZE="2">
<br><br>




<TABLE ALIGN="left"> <TH COLSPAN="2"></tr>
<td>Primary Contact:<td>{{ $dep->contact }}<tr>
<td>E-mail: <td> {{$dep->email }}<tr>
<td>Copy Service: <td> {{ $dep->copy_service }}<tr>

</table>
</div>

@stop



@section('content_right')
<div class="centertext">
<h2>
Doctors	
</h2>

<HR WIDTH="80%" align="right" COLOR="#000000" SIZE="2">

<br><br><br>





<h2>
Sister Locations	
</h2>

<HR WIDTH="80%" align="right" COLOR="#000000" SIZE="2">

<br><br><br>




<h2>
Formerly Known As:
</h2>

<HR WIDTH="80%" align="right" COLOR="#000000" SIZE="2">

<br><br><br>

</div>
@stop



@section('timestamper')

<h3>Created at: {{ $dep->created_at}} by {{$dep->created_user}} </h3><br>


@endforeach

@stop


@section('last')

@stop