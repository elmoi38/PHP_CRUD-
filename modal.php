 <!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
               <h4 class=" modal-title w-100 font-weight-bold" id="myModalLabel">Add Product</h4>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
      <div class="container-fluid">
      <form id="addForm">
       
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Product Name:</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="product_name" required>
            
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Price:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="price" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Category:</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="category" required>
          </div>
        </div>
            </div> 
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary add">Save</button>
      </form>
            </div>

        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header text-center">
               <h4 class=" modal-title w-100 font-weight-bold" id="myModalLabel">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
      <div class="container-fluid">
      <form id="editForm">
        <input type="hidden" class="id" name="id">
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Product Name:</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control product_name" name="product_name" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Price:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" class="form-control price" name="price" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Category:</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control category" name="category" required>
          </div>
        </div>
            </div> 
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Update</button>
      </form>
            </div>

        </div>
    </div>
</div>


 <!-- Delete Modal -->
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold" id="myModalLabel">Delete Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">  
              <p class="text-center">Are you sure you want to Delete</p>
              <h2 class="text-center fullproduct"></h2>
              
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="button" class="btn btn-danger id">Yes</button>
                
            </div>

        </div>
    </div>
</div>