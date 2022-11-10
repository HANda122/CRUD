@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-body">
<div class="col-12">
<div class="card">
<div class="table-responsive">
<a href="{{ route('students.create')}}" type="button" class="btn btn-info">Add</a>
<table class="table table-vcenter card-table">
<thead>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
</tr>
</thead>
<tbody>
@foreach ($students as $student)
<tr>
<td>{{ $student->name }}</td>
<td>{{ $student->phone_number }}</td>
<td>{{ $student->address }}</td>
<td>
<a href="{{ route('students.edit', $student->id)}}" type="button" class="btn btn-success">Edit</a>
<a href="{{ route('students.delete', $student->id)}}" type="button" class="btn btn-danger">Delete</a>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection