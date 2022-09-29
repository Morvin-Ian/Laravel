@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
    
@endphp
@foreach ($tags as $tag)
    <a href="/?tag={{$tag}}" class="text-bg-dark me-3">{{$tag}}</a> 
@endforeach

<style>
    .text-bg-dark{
        text-decoration: none;
        padding: 5px;
        border-radius: 10px;
    }
</style>