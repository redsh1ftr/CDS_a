@extends('layouts.report')
@section('content')
<h2>
	{{link_to_route('create_firm', 'New Firm') }}
</h2>

<HR WIDTH="100%" COLOR="#000000" SIZE="3">

@foreach($firm_list1 as $firm_list)

<ul>
{{ link_to_route('firm_profile', ($firm_list->name), $firm_list->id, array('id' => $firm_list->id)); }}
</ul>
@endforeach
<br><br>

@stop