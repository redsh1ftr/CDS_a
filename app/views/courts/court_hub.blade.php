@extends('layouts.report')
@section('content')
<br><br>
<h2>
{{link_to_route('court_list', 'Court List') }}
<br>
{{link_to_route('new_court', 'Create New Court') }}
</h2>
@stop