@extends('layouts.report')
@section('content')

<TABLE  BORDER="0"> <TH COLSPAN="4">

@foreach($case_list1 as $case_list)
</tr>


<th>{{ link_to_route('case_profile', ($case_list->caption), $case_list->id, array('id' => $case_list->id)); }}</th><th>{{ $case_list->case_number }}</th>
@endforeach
</table>

<h2>
	{{link_to_route('court_selection', 'New Case') }}
</h2>
@stop