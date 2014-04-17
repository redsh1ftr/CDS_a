@extends('layouts.report')
@section('content')



<h2>
	{{link_to_route('court_selection', 'New Case') }}
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">





<TABLE  BORDER="0"> <TABLE WIDTH="600">

@foreach($case_list1 as $case_list)


</tr>


	<ul>
<th>{{ link_to_route('case_profile', ($case_list->caption), $case_list->id, array('id' => $case_list->id)); }}</th><th>{{ $case_list->case_number }}</th><th>{{ $case_list->status }}</th></tr>

</ul>
@endforeach
</table>
</div>
@stop

@section('test')

Testing Datas
@stop