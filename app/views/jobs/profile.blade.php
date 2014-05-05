@extends('layouts.report')

@section('content')

{{$job_list1}}
@foreach($case_list1 as $req)

{{$req}}
@endforeach

@stop
