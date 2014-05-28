@extends('layouts.profile')
@section('topbar')



@stop

@section('content_left')

<table width="100%">
@foreach($jobs as $job)


<td>{{link_to_route('check_in_invoice_manually', $job->job_number, $job->id, array('id' => $job->id, 'manual' => 'n'));}}<td>{{DeponentMain::where('id', '=', $job->deponent_id)->pluck('name')}}<tr>

@endforeach
</table>
@stop