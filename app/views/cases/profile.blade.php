@extends('layouts.report')
@section('content')

@foreach($case_list1 as $case_list)
<h1>
{{ $case_list->caption }} ( {{ $case_list->case_number }} )<br>
</h1>
<h3>Created at: {{ $case_list->created_at}} </h3><br><br>

<h3>
Plaintiff:<br>
</h3>
<h2>
{{ $case_list->plaintiff }}<br><br></h2>
<h3>
Defendant:<br>
</h3>
<h2>
{{ $case_list->defendant }}<br><br>
</h2>


<h3>
<TABLE  BORDER="0"> <TH COLSPAN="2"></tr>
<th>File Number:</th><th>	{{ $case_list->file_number }}</th></tr>
<th>Claim Number:</th><th>	{{ $case_list->claim_number }}</th><tr>
<th>Judge:</th> <th> {{ $case_list->judge }}</th><tr>
<th>Discovery Date:</th><th> {{ $case_list->discovery_date }}</th><tr>
</table>
<br>
</h3>
@endforeach

@foreach ($court_info1 as $court_info)

<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>

{{ link_to_route('court_profile', "$court_link_number $court_link_type court of $court_link_county county", $court_info->id, array('id' => $court_info->id)); }}



@endforeach

@stop