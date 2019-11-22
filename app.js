$(document).ready(function()
  {
  //add
$('#addnew').click(function(){
    $('#add').modal('show');
  });

  $('#addForm').submit(function(e){
    e.preventDefault();
    var addform = $(this).serialize();
   
    $.ajax({
      method: 'POST',
      url: 'add.php',
      data: addform,
      dataType: 'json',
      success: function(response){
        $('#add').modal('hide');
        if(response.error){
          $('#alert').show();
          $('#alert_message').html(response.message);
        }
        else{
          $('#alert').show();
          $('#alert_message').html(response.message);
           myFunction()
        }
      }
    });
  });


  //edit
  $(document).on('click', '.edit', function(){
    var id = $(this).data('id');
    getDetails(id);
    $('#edit').modal('show');
  });
  $('#editForm').submit(function(e){
    e.preventDefault();
    var editform = $(this).serialize();
    $.ajax({
      method: 'POST',
      url: 'edit.php',
      data: editform,
      dataType: 'json',
      success: function(response){
        if(response.error){
         
          // $('#alert').show();
          // $('#alert_message').html(response.message);
        }
        else{
          // $('#alert').show();
          // $('#alert_message').html(response.message);
          $('#edit').modal('hide');
           myFunction();
        }

        
      }
    });
  });
  //

  //delete
  $(document).on('click', '.delete', function()
  {
    var id = $(this).data('id');
    getDetails(id);
    $('#delete').modal('show');

  });

  $('.id').click(function(){
    var id = $(this).val();

    $.ajax({
      method: 'POST', 
      url: 'delete.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('#alert').show();
          $('#alert_message').html(response.message);
        
        }
        else{
          $('#alert').show();
          $('#alert_message').html(response.message);
          myFunction();
        }
        
        $('#delete').modal('hide');
      }
    });
  });


}); // end function

  
function getDetails(id){
  $.ajax({
    method: 'POST',
    url: 'fetch_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      if(response.error){
        //$('#edit').modal('hide');
        $('#delete').modal('hide');
        $('#alert').show();
        $('#alert_message').html(response.message);
      }
      else{
        $('.id').val(response.data.id);
        $('.product_name').val(response.data.product_name);
        $('.price').val(response.data.price);
        $('.category').val(response.data.category);
        $('.fullproduct').html(response.data.product_name + ' ' + response.data.price);
      
      }
    }
  });
}



function myFunction()
{
  location.reload();
}



