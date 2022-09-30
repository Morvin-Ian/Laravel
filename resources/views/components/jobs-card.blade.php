@props(['job'])


 <div class="d-flex flex-wrap container ms-5 mt-5">
    <div class="me-1 ms-5">
        <img style="border-radius: 5px; object-fit:cover;" src="{{asset('storage/app/public/'.$job->logo)}}" class="image-fluid" alt="" height="100" width="100">
    
    </div>
    
    <div class="m-2">
        <h4>
            <a style="text-decoration: none; font-size:20px;" class="link-dark text-wrap" href="/jobs/{{$job->id}}">
                {{$job->title}}
            </a>
        </h4>   
        
        <small>
            <x-jobs-tags :tagsCsv="$job->tags"/>
        </small>
        
        <p style="margin-top: 20px"> {{$job->location}} </p>
    
    </div>
    
</div>