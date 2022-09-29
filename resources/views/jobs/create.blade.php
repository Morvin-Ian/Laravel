@extends('layout')

@section('content')
    
<form class='m-5 ps-5 pe-5' action="/jobs" method="POST">
    @csrf
    <div class="mb-2 ">
      <label for="exampleFormControlInput1" class="form-label">Job Title</label>
      <input type="text" class="form-control" name="title" placeholder="Example Backend Engineer" required>
    </div>

    <div class="mb-2 ">
        <label for="exampleFormControlInput1" class="form-label">Company name</label>
        <input type="text" class="form-control" name="company" placeholder="Example Microsoft" required>
      </div>
    <div class="mb-2 ">
        <label for="ExampleFormControlInput1" class="form-label">Location</label>
        <input type="text" class="form-control" name="location" placeholder="Example Nairobi" required>
    </div>

    <div class="mb-2 ">
        <label for="ExampleFormControlInput1" class="form-label">Contact Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    
    
    <div class="mb-2 ">
        <label for="ExampleFormControlInput1" class="form-label">Tags</label>
        <input type="text" class="form-control" name="tags" placeholder="Example Django, laravel, React (Must be omma separated)" required>
    </div>
 
    <div class="mb-2 ">
        <label for="ExampleFormControlInput1" class="form-label">Company Logo</label>
        <input type="file" class="form-control" name="logo">
    </div>
      
    <div class="mb-2 ">
      <label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
      <textarea class="form-control" name="description" rows="3" placeholder="..."></textarea required>
    </div>

    <button type="submit" class="btn btn-primary btn-default"style="padding-left: 2.5rem; padding-right: 2.5rem;">Post</button>
</form>

@endsection