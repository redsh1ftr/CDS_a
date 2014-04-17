@extends('layouts.report')
@section('content')
@foreach($firm_list1 as $firm_list)
<h2>
	{{link_to_route('firm_selection', 'New Attorney', $firm_list->id, array('id' => $firm_list->id)); }}
</h2>


<HR WIDTH="100%" COLOR="#000000" SIZE="3">


<h1>
{{ $firm_list->name }} 
</h1><br><br>
<h2>
{{$firm_list->street1 }} {{$firm_list->street2 }}<br>
{{$firm_list->city }}{{$firm_list->state }}, {{$firm_list->zip }}<br><br>
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

@section('right')

<h1>
	Attorneys:
</h1>
<HR WIDTH="100%" COLOR="#000000" SIZE="3">
@foreach($attorney_list1 as $attorney_list)
<?php $atty_first = $attorney_list->first_name?>
<?php $atty_middle = $attorney_list->middle_name?>
<?php $atty_last = $attorney_list->last_name?>
<?php $pnumb = $attorney_list->p_number?>
<?php $atty_name = $atty_first.$atty_middle.$atty_last;?>

{{ link_to_route('attorney_profile', "$atty_first $atty_middle $atty_last (P# $pnumb)", $attorney_list->id, array('id' => $attorney_list->id)); }}<br>
@endforeach

@stop