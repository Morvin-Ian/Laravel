@extends('layout')

@section('content')
@include('partials/_search')
@include('partials/_nav')
@include('partials/_sign')



<a href="/jobs/create" class="mx-5 mb-1"> + Post Gigs</a>
<div class="d-flex flex-wrap">
    @if(count($jobs) != 0)
        @foreach ($jobs as $job)
        <div class="d-flex">
          <x-jobs-card :job="$job"/> 
        </div>
        @endforeach
    @else
        <h6>No Jobs availabel</h6>
    @endif

</div>

@endsection