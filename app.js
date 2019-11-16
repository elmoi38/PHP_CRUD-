$(document).ready(function()
  {
  

  //hide-delete message (will move to salvage_asset table)
  $(document).on('click', '.delete', function()
  {
    var id = $(this).data('id');
    getDetails(id);
    //alert(id);
    $('#delete').modal('show');

  });

  $('.id').click(function(){
    //alert("test");
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
          myFunction()
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



