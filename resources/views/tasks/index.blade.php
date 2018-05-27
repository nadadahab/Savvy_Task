@extends('layouts.app')
@section('content')
<div class="text-center">
<h1>Tasks</h1>
<table border="1px" class="table table-hover">
<tr>
<th>Number</th>
<th>Name</th>
</tr>
@foreach ($tasks as $task)
<tr>
<td>
{{ $task->id }} 
</td>
<td>
{{ $task->name }}
</td>
</tr>
@endforeach
</table>
</div>
@endsection