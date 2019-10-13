

  <!-- Trigger the modal with a button -->
 
       
  <!-- Modal -->


<div class="card">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
   <div class="modal-content">
       
        <div class="modal-header card-header">
          <h3 class="modal-title">Create New Post</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        
        
     <form action="{{action('PostsController@store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
               <label for="title">TITLE</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Type Post Title">  
              </div>

                            
              <div class="form-group">
                 <label for="body">BODY</label>
                  <textarea name="body" id="body" class="form-control" placeholder="Type Your Post" rows="7"></textarea>
              </div>                
              <div>
                 <label for="cover_img">UPLOAD A FILE</label><br>
                  <input type="file" name="cover_image">
              </div>
          
        </div>
        
        <div class="modal-footer card-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        
        <button type="submit" class="btn btn-primary">Submit Post</button>
        </div>
        </form>
        </div>
      
      
    </div>
  </div>
  
</div>