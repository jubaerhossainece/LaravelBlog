@extends('layouts.app')

@section('content')
   
<div class="card mb-3">   
   <div class="card-header">
   <h1>Create Post</h1>

  </div>
  <div class="card-body">
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Post Here</button>

  </div>
   <div class="card-footer">
            
   </div>
    @include('inc.modal')
</div>    
        <div class="card">
           <div class="crad-header bg-light p-2">
            <h1>Posts</h1>               
           </div>

        </div>
         
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card mb-3">
                   <div class="card-header bg-light">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>   
                   </div>
                   <div class=" card-body col-md-6 col-sm-6">
                       <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img" alt="">
                   </div>
                  <div class="card-body">
                        {{$post->body}}
                    </div>
                </div>    
            @endforeach
            {{$posts->links()}}
        @else
        <p>No posts found!</p>
    @endif                        
      
   
   
  <!-- Modal -->
  @include('inc.modal')  
   
   
   
@endsection