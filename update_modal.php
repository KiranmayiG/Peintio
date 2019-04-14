 <div id="updateproduct" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                <h4 class="modal-title" align='center'> <b>Update Painting</b></h4>
            </div>
             <a href="update_modal.php"></a>
                <div class="modal-body">
                 <form method="post" action = 'update.php' enctype="multipart/form-data" >                  
                <label for="category"> Category :</label>
                <input type ="text" list="categories1" placeholder="Category" name="category" class="form-control">
                <datalist id="categories1">
                  <option value="Oil Painting">
                  <option value="Watercolor Painting">                   
                </datalist>
                <br>
                 
                <center><input type="submit" class="btn w3-black w3-btn" name="upload" value ="Update"> </center>
                </form>        
       
             </div>
            
            </div>
         </div>
        </div>


