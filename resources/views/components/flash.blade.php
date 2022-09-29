@if(session()->has('message'))
<div class="container">
    <p class="text-center">
        <small class="bg-danger pt-2 pb-2 ps-5 pe-5" style="color: white;" >{{session('message')}}</small>
    </p>
</div>
    
@endif