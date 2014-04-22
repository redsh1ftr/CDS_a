@extends('layouts.report')
@section('content')

{{ Form::model($case_list1, array('update_case' => array('case_list.edit', $case_list1->id))) }}


    {{ Form::close() }}
@stop