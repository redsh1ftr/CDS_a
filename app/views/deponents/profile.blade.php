@extends('layouts.profile')





@section('topbar')

Link bar

@stop


@section('content_left')

@foreach($dep1 as $dep)
<h2>
{{$dep->name}}
</h2><br>
@if($dep->stree2) {{ $dep->street1 }}, {{ $dep->street2 }}<br>
@else {{$dep->street1 }}<br>
{{$dep->city }} {{ $dep->state}}, {{ $dep->zip }}
@endif
<HR WIDTH="100%" COLOR="#000000" SIZE="2">
<br><br>

<TABLE ALIGN="left"> <TH COLSPAN="2"></tr>
<td>Primary Contact:<td>{{ $dep->contact }}<tr>
<td>Phone:<td> {{$dep->phone }}<tr>
<td>Fax: <td> {{ $dep->fax }}<tr>
<td>E-mail: <td> {{$dep->email }}<tr>

</table>


@stop



@section('content_right')

@stop



@section('timestamper')

<h3>Created at: {{ $dep->created_at}} by {{$dep->created_user}} </h3><br>


@endforeach

@stop


@section('last')

@stop