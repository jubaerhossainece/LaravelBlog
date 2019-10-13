@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Dashboard</h1>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create Post</button>    
            
        </div>
        <div class="card-footer">
            
        </div>
    </div>
    @include('inc.modal')
    
    <div class="card mt-3">
        <div class="card-header">
            <h3>Your Blog Posts</h3>
        </div>
        <div class="card-body">
           @if(count($posts) > 0)
            <table class="table table-striped">
            <tr>
                <th class="col-md-9">Title</th>
                <th class="col-md-3"></th>
            </tr>
            @foreach($posts as $post)

            <tr>
                <td>{{$post->title}}</td>
                <td>
                    <div class="row justify-content-center">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{action('PostsController@destroy', $post->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ml-2">Delete</button>
                    </form>
                    </div>
                </td>
                
            </tr>
            @endforeach

        </table>
        @else
        <p>You have no post!</p>
        @endif
        </div>
    </div>
@endsection
