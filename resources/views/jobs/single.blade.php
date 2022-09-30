@extends('layout')

@section('content')
@include('partials/_nav')
@include('partials/_sign')


<div class="container">
    <h3>{{$job->title}}</h3>

    <div class="container">
        <h3>Gig Description</h3>

        <x-jobs-tags :tagsCsv="$job->tags"/>
        <p class="mt-3">{{$job->description}}</p>
        <p>Company/Organization: {{$job->company}}</p>
        <p>Location: {{$job->location}}</p>

    </div>

   

    <form action="/jobs/{{$job->id}}" method="post">
        @csrf
        @method('DELETE')
        <a class="btn btn-outline-primary" href="/jobs/{{$job->id}}/edit">Edit</a>
        <button class="btn btn-outline-danger" type="submit">Delete</button>
    </form>
    

    {{-- <button type="submit" class="btn btn-dark w-100 mb-2">Contact Employer</button> <br>
    <button type="submit" class="btn btn-danger w-100 mb-5">Visit Website</button> --}}

</div>

@endsection