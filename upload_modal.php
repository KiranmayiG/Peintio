 <div id="uploadimage" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                  <h4 class="modal-title" align='center'> <b>Upload Painting</b></h4>
            </div>
             <div class="modal-body">
                 <form method="post" action = 'upload.php' enctype="multipart/form-data" >                  
                <label for="category1"> Category :</label>
                <input type ="text" list="categories3" placeholder="Category" name="category1" class="form-control">
                <datalist id="categories3">
                  <option value="Oil Painting">
                  <option value="Watercolor Painting">
                  </datalist>
                <br>        
                <center><input type="file" class="btn w3-btn w3-black" name="image"></center>
                <br><br>
                <center><input type="submit" class="btn w3-btn w3-black" name="upload" value ="Upload"> </center>
                </form>        
       
             </div>
             
            </div>
         </div>
        </div>
