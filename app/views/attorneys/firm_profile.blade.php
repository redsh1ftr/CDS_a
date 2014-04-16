@extends('layouts.report')
@section('content')
@foreach($firm_list1 as $firm_list)
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