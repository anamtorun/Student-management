@extends('layout')
@section('content')
<div class="container">
<h3 style="text-align: center">Student Lists</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Student ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Batch</th>
        <th scope="col">Department</th>
        <th scope="col">Perform Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
      <tr>
        <td>{{$item->student_id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->batch}}</td>
        <td>{{$item->dept}}</td>
        <td>
          <a href="/update/{{$item->id}}" class="btn btn-primary">Edit</a>
          <a href="/delete/{{$item->id}}" class="btn btn-warning">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <span>{{$data->links()}}</span>
</div>

@endsection