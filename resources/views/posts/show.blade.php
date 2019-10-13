@extends('layouts.app')


@section('content')
        <div class="card">
            <div class="card-header">
                <h3>{{$post->title}}</h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
            <div class="card-body col-md-6 col-sm-6">
                       <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img" alt="">
            </div>
            <div class="card-body">
            <p>{{$post->body}}</p>   
            </div>
            <div class="card-footer">
            <div class="row">
               
               @if(!auth::guest())
                @if(auth::user()->id == $post->user->id)    
                    <a href="/posts/{{$post->id}}/edit" class="ml-2 btn btn-success">Edit Post</a>

                    <form action="{{action('PostsController@destroy', $post->id)}}" method="POST">
                     @csrf
                     <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger ml-1">Delete</button>
                     </form>
                    @endif 
                 @endif
            </div>
            
        </div>
    </div>        
    
    
@endsection