@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header">
   <h1>Create Post</h1>

  </div>

  <div class="container card-body">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Post Here</button>

</div>
</div>   
       
  <!-- Modal -->
  
  @include('inc.modal')   
@endsection
