@extends('layouts.report')
@section('content')

<TABLE  BORDER="0"> <TH COLSPAN="4">

@foreach($firm_list1 as $firm_list)


</tr>


<th>{{ link_to_route('firm_profile', ($firm_list->name), $firm_list->id, array('id' => $firm_list->id)); }}</th><th>{{ $firm_list->phone }}</th>
@endforeach
</table>

<h2>
	{{link_to_route('create_firm', 'New Firm') }}
</h2>
@stop