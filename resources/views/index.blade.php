@extends('layouts.index')
@section('header')
<div class="sub-title">
  <h2>My Blog</h2>
  <a href="contact.html"><i class="icon-envelope"></i></a>
</div>

@stop
@section('content')                        
                            
   
    <!-- Blog Post Start -->
    @foreach($posts as $post)
    @include('partials.post', ['post' => $post])
    @endforeach
    <!-- Blog Post End -->
    
    
    
    <div class="col-md-12 text-center">
     <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
     <div id="post-end-message"></div>
    </div>
    


@stop