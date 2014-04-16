@extends('layouts.report')
@section('content')
<TABLE  BORDER="0"> <TH COLSPAN="4">
<tr><th>County</th><th>Court Number</th><th>Court Type</th>
@foreach($court_list1 as $court_list)
</tr>


<th>{{ link_to_route('selected_court', ($court_list->county), $court_list->id, array('id' => $court_list->id)); }}</th><th>{{$court_list->court_number }}</th><th>{{ $court_list->type }}</th>
@endforeach
</table>

<h2>
	{{link_to_route('new_court', 'New Court') }}
</h2>
@stop