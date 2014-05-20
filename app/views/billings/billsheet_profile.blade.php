@extends('layouts.billsheet_profile')
<?php $costsum = 0; ?>
@foreach($records_list1 as $records)
<?php $costsum+= $records->quantity * (RecTypeMain::where('type', '!', 'Pages')->where('type', '=', $records->type)->pluck('price'));?>
@endforeach

<?php $invoicesum =0;?>
@foreach($invoice_list1 as $invoices)
<?php $invoicesum+= $invoices->invoice_amount;?>
@endforeach



<?php $pagesum =0;?>
@foreach($pages as $pcount)
<?php $pagesum+= $pcount->quantity;?>
@endforeach















@section('topbar')
@if($pagesum <= 0)
<?php $pagetotal = 0;?>
@elseif($pagesum < 10)
<?php $pagetotal = 10.00;?>
@elseif($pagesum <= 20)
<?php $pagetotal = ($defaults->stat_base + ($pagesum * $defaults->stat_120));?>
@elseif($pagesum <= 50)
<?php $pagetotal = ($defaults->stat_base + 23.40 + (($pagesum - 20) * $defaults->stat_2150));?>
@elseif($pagesum < 50)
<?php $pagetotal = ($defaults->stat_base + 41.1 + (($pagesum - 50) * $default->stat_59));?>
@endif
{{$pagetotal}}

{{$defaults->street1}}

@stop

@section('content_left')

{{$pagesum}}
<table>
<td>	
Court:
<td>
@foreach($court_list1 as $court_info)
<?php $court_link_number = $court_info->court_number; ?>
<?php $court_link_type = $court_info->type; ?>
<?php $court_link_county = $court_info->county; ?>


@if($court_link_type === 'Federal')
{{link_to_route('court_profile', "$court_link_number United States $court_link_type Court", $court_info->id, array('id' => $court_info->id)); }}
@else
{{link_to_route('court_profile', "$court_link_number $court_link_type Court of $court_link_county County", $court_info->id, array('id' => $court_info->id)); }}
@endif
@endforeach
<tr>
<td>	
Deponent:
<td> 
@foreach($deponent_list1 as $deponent)
{{link_to_route('deponent_profile', $deponent->name, $deponent->id, array('id' => $deponent->id)); }}
@endforeach

<tr>
<td>
Name on Record:
<td>
@foreach($nor_list1 as $nor)
<?php $nor_first = $nor->first_name;?>
<?php $nor_middle = $nor->middle_name;?>
<?php $nor_last = $nor->last_name;?>

{{link_to_route('nor_profile', "$nor_first $nor_middle $nor_last", $nor->id, array('id' => $nor->id)); }}

@endforeach

<tr>
@foreach($case_list1 as $case)
@if($case->claim_number)
<td>
Claim:
<td>
{{$case->claim_number}}
<tr>
@endif
<td>
Mini-Caption:
<td>
{{link_to_route('case_profile', $case->caption, $case->id, array('id' => $case->id)); }}
@endforeach
<td>

</table>




@stop

@section('content_right')
<table>
<td>
Job Number: 
<td>
@foreach($job_list1 as $job)
{{link_to_route('job_profile', $job->job_number, $job->id, array('id' => $job->id)); }}
<tr>
<td>
Records Due:
<td>
{{$job->records_due}}
<tr>
<td>


<?php $atty_first = $requester->first_name;?>
<?php $atty_middle = $requester->middle_name;?>
<?php $atty_last = $requester->last_name;?>
<?php $atty_p = $requester->p_number;?>


{{link_to_route('attorney_profile', "$atty_first $atty_middle $atty_last (P#$atty_p)", $requester->id, array('id' => $requester->id)); }}	
Cost:
<td>
${{number_format($pagetotal + $costsum + $invoicesum + $defaults->subp_fee, $decimals = 2)}}
<tr>
@endforeach
<tr>
</table>

@stop

@section('contents')


<table width="100%">
@foreach($job_attorneys as $attys)

<?php $atty_first = AttorneyMain::where('id', '=', $attys)->pluck('first_name');?>
<?php $atty_middle = AttorneyMain::where('id', '=', $attys)->pluck('middle_name');?>
<?php $atty_last = AttorneyMain::where('id', '=', $attys)->pluck('last_name');?>
<?php $atty_p = AttorneyMain::where('id', '=', $attys)->pluck('p_number');?>
<?php $atty_id = AttorneyMain::where('id', '=', $attys)->pluck('id');?>
<?php $atty_side = Case1Attorney::where('attorney_id', '=', $attys)->pluck('side');?>


<td>{{link_to_route('attorney_profile', "$atty_first $atty_middle $atty_last (P#$atty_p)", $atty_id, array('id' => $atty_id)); }}<br>{{$atty_side}}<td>


@endforeach
</table>
@stop

@section('middle_content_left')





<table width="50%" border="1">
<th>Received</th><th>Record Type</th><th>Count</th><tr>




<h2>Unbilled Records</h2>
@foreach($records_list1 as $records)



<td>{{ Carbon::parse($records->received)->format('D, M d Y') }}<td>
{{ $records->type }}<td>
{{ $records->quantity}}<tr>

@endforeach
</table>
@stop

@section('middle_content_right')

<table width="50%" border="1">
<th>Received</th><th>Invoice Number</th><th>Amount</th><tr>
@if($invoice_list1)
<h2>Unbilled Invoices</h2>
@foreach($invoice_list1 as $invoices)

<td>{{Carbon::parse($invoices->received)->format('D, M d Y')}}
<td>{{$invoices->invoice_number}}
<td>{{$invoices->invoice_amount}}<tr>
@endforeach
@endif
</table>
<br><br>
@stop


@section('2middle_content_left')





<table width="50%" border="1">
<th>Received</th><th>Record Type</th><th>Count</th><tr>




<h2>Billed Records</h2>
@foreach($billed_records1 as $records)



<td>{{ Carbon::parse($records->received)->format('D, M d Y') }}<td>
{{ $records->type }}<td>
{{ $records->quantity}}<tr>

@endforeach
</table>
@stop

@section('2middle_content_right')

<table width="50%" border="1">
<th>Received</th><th>Invoice Number</th><th>Amount</th><tr>
@if($invoice_list1)
<h2>Billed Invoices</h2>
@foreach($billed_invoice1 as $invoices)

<td>{{Carbon::parse($invoices->received)->format('D, M d Y')}}
<td>{{$invoices->invoice_number}}
<td>{{$invoices->invoice_amount}}<tr>
@endforeach
@endif
</table>
@stop





@section('last')


<br><br>

@stop