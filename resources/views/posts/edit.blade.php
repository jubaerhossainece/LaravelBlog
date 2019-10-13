@extends('layouts.app')


@section('content')

    <div class="card">
      <form action="{{action('PostsController@update', $post_edit->id)}}" method="POST" enctype="multipart/form-data">
      
      {{ csrf_field() }}
      {{ method_field('PUT')}}
       <div class="card-header form-group">
           <label for="title">Title</label>
           <input type="text" class="form-control" name="title" value="{{$post_edit->title}}">
       </div>
        <div class="card-body">
            <label for="cover_img">Select a File</label><br>
            <input type="file" name="cover_image">
        </div>
        <div class="card-body form-group">
           <label for="body">Body</label>
           <textarea name="body" id="body" rows="7" class="form-control">{{$post_edit->body}}</textarea>
       </div>
       <div class="card-footer">
           <button type="submit" class="btn btn-success">Update Post</button>
       </div>
      </form>  
    </div>
    
        
@endsection