@extends('layout')

@section('content')
    
<form class='m-5 ps-5 pe-5' action="/jobs" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-2 ">
      <label for="exampleFormControlInput1" class="form-label">Username</label>
      <input type="text" class="form-control" name="name" required>
    </div>

    
    <div class="mb-2 ">
        <label for="ExampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary btn-default"style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
</form>

@endsection