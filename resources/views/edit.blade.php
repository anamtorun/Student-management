
@extends('layout')
@section('content')
<h2 style="margin-left: 150px;">Add Student Information</h2><br>
<div class="container">

<div style="margin: 0 auto;">
    <form class='col-sm-6' action="update" method="post" >
    @csrf
    @method('PUT')
    
    <div class="form-group">
    <input type="hidden" class="form-control"  name= "id" value="{{$data->id}}">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data->name}}" >
    </div>

     <div class="form-group">
    <label for="email">Email address:</label>

    <input type="email" class="form-control" name="email" value="{{$data->email}}" >
    </div>
    <div class="form-group">
    <label for="">ID</label>
    <input type="text" class="form-control" name="student_id" value="{{$data->student_id}}" >
    </div>
     <div class="form-group">
    <label for="">Batch</label>
    <input type="text" class="form-control" name="batch" value="{{$data->batch}}" >
    </div>
    <div class="form-group">
    <label for="">Department</label>
    <input type="text" class="form-control" name="department" value="{{$data->dept}}" >
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection