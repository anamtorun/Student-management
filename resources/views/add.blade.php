@extends('layout')
@section('content')
<h2 style="margin-left: 150px;">Add Student Information</h2><br>
<div class="container">
<div style="margin: 0 auto;">
    <form class='col-sm-6' action="/add" method="post" >
    @csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>

    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="">ID</label>
    <input type="text" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label for="">Batch</label>
    <input type="text" class="form-control" name="batch">
  </div>
    <div class="form-group">
    <label for="">Department</label>
    <input type="text" class="form-control" name="department">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection