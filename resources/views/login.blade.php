@extends('master')
@section("content")
<div class="container mt-5" >
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
<form action="/login" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- Basic dropdown -->
<button class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">User</button>

<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Login as Admin</a>
  <a class="dropdown-item" href="#">Login as Accountant</a>
</div>
<!-- Basic dropdown -->
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div class="col-sm-4">
</div class="row">
<div class="container">
@endsection