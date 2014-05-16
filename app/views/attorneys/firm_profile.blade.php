@extends('layouts.profile')
@section('content_left')
@foreach($firm_list1 as $firm_list)
<h2>
	{{link_to_route('firm_selection', 'New Attorney', $firm_list->id, array('id' => $firm_list->id)); }}
</h2>


<HR WIDTH="80%" ALIGN="LEFT" COLOR="#000000" SIZE="2">


<h1>
{{ $firm_list->name }} 
</h1><br><br>
<h2>
@if($firm_list->street2)	
{{$firm_list->street1 }}, {{$firm_list->street2 }}<br>
@else
{{$firm_list->street1 }}
@endif

{{$firm_list->city }} {{$firm_list->state }}, {{$firm_list->zip }}<br><br>
Phone: {{ $firm_list->phone }} <br>
Fax: {{$firm_list->fax }} <br><br><br></h2>

<h3>
Office Manager: {{$firm_list->office_manager }}<br>
Phone: {{$firm_list->manager_phone }}<br>

<?php $manager_e = $firm_list->manager_email ?>

{{ HTML::mailto($firm_list->manager_email) }}<br>
<br><br>


<h3>
Notes:<br>
{{$firm_list->info}}<br>
</h3>
@endforeach
  
@stop

@section('content_right')

<h1>
	Attorneys
</h1>
<HR WIDTH="80%" ALIGN="LEFT" COLOR="#000000" SIZE="2">
@foreach($attorney_list1 as $attorney_list)

<?php $atty_middle = Str::limit($attorney_list->middle_name, $limit=1, $end='.')?>
<?php $atty_last = $attorney_list->last_name?>
<?php $pnumb = $attorney_list->p_number?>
<?php $atty_name = "$attorney_list->first_name $atty_middle $attorney_list->last_name";?>

{{ link_to_route('attorney_profile', "$atty_name (P# $attorney_list->p_number)", $attorney_list->id, array('id' => $attorney_list->id)); }}<br>
@endforeach
@stop


@section('timestamper')
@foreach($firm_list1 as $firm_list)
Created by {{ $firm_list->created_user}} {{ $firm_list->created_at}}

<br>
This will be the employeee number<br> for printing and quality control. there will be logs.

@endforeach
@stop