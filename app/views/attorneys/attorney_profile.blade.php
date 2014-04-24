@extends('layouts.report')
@section('content')




@foreach($attorney_list1 as $attorney_list)

<h1>
{{ $attorney_list->first_name }} {{ $attorney_list->middle_name }} {{ $attorney_list->last_name }} (P#{{$attorney_list->p_number}})
</h1>
<HR WIDTH="50%" ALIGN="left" COLOR="#000000" SIZE="1">



<h3>

<table>	
	{{ HTML::mailto($attorney_list->atty_email)}}</tr>
	<th>Phone:</th><th>{{$attorney_list->atty_phone}}</th><tr>
	<th>Fax:</th><th>{{$attorney_list->atty_fax}}</th><tr>
</table>
</h3>
<br><br><br>
@endforeach

<h1>
Open Cases:
<HR WIDTH="50%" ALIGN="left" COLOR="#000000" SIZE="3">
</h1>
<h3>

@foreach($case_list_open as $case_list)


{{ link_to_route('case_profile', "$case_list->caption ($case_list->case_number)", $case_list->id, array('id' => $case_list->id)); }}<br>


@endforeach

</h3>

<h1>
Closed Cases:
<HR WIDTH="50%" ALIGN="left" COLOR="#000000" SIZE="3">
</h1>

<h3>

@foreach($case_list_closed as $case_list)

{{ link_to_route('case_profile', "$case_list->caption ($case_list->case_number)", $case_list->id, array('id' => $case_list->id)); }}<br>

@endforeach
</h3>


@stop
@section('right')

@foreach($firm_lists as $firm_list)

<h1>
{{ link_to_route('firm_profile', ($firm_list->name), $firm_list->id, array('id' => $firm_list->id)); }}
</h1>
<HR WIDTH="100%" ALIGN="left" COLOR="#000000" SIZE="3">
<h3>
{{ $firm_list->street1}} {{$firm_list->street2}}<br>
{{ $firm_list->city }} {{ $firm_list->state }}, {{ $firm_list->zip }}<br>
<table>
	<th>Phone:</th><th>{{ $firm_list->phone }}</th><tr>
	<th>Fax:</th><th>{{ $firm_list->fax }}</th><tr>
</table>
<HR WIDTH="50%" ALIGN="left" COLOR="#000000" SIZE="1">

{{ $firm_list->office_manager}}, Office Manager <br>
{{ HTML::mailto($firm_list->manager_email)}}<br>
Phone: {{ $firm_list->manager_phone}}
</h3>
@endforeach


<br><br>
<h1>
Secretaries
</h1>

<HR WIDTH="100%" COLOR="#000000" SIZE="3">
@foreach($attorney_list1 as $attorney_list)
<h2>
	{{$attorney_list->sec_first}} {{$attorney_list->sec_middle}} {{$attorney_list->sec_last}}
</h2>
<h3>	
{{HTML::mailto($attorney_list->sec_email)}}
<br>
<table>
	<th>Phone:</th><th>{{ $attorney_list->sec_phone}}</th><tr>
	<th>Fax:</th><th>{{ $attorney_list->sec_fax}}</th>
</table>
<br><br>


<h1>Notes:</h1>
<HR WIDTH="100%" COLOR="#000000" SIZE="3">
<h3>
{{$attorney_list->info}}
</h3>

@stop

@section('timestamper')
Created by {{ $attorney_list->created_user}} {{ $attorney_list->created_at}}

@endforeach
@stop