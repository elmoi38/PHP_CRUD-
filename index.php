<!DOCTYPE html>
<html>
<head>
<!-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.6.2/core.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">

     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>


<meta charset="utf-8"/>


</head>
<body>
 <?php  
 
   include 'db_connection.php';

  $database = new Connection();
  $db = $database->open();
  $sql = "SELECT * FROM til_products ORDER BY id";

echo '<br><center><h1>Product Table</h1></center>';
echo '
 <div class="col-sm-8 col-sm-offset-2">
  <button id="addnew" class="btn btn-success"> New</button>
   </div>
   <br>
      <table id="table" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%" data-search="true" data-visible-search="true" data-search-align="right" data-pagination="true" >

        <thead align="center">
          <tr>
            <th class="text-center"><em class="fa fa-cog"></em></th>
            <th data-field="product_name" class="text-center">Product Name</th>
            <th data-field="price" class="text-center">Cost</th>
            <th data-field="category" class="text-center">Category</th>
           
          </tr>
        </thead>
      <tbody>';


          //  <tbody id="tbody">
        if ($result = $db->query($sql))
        {
          // display records if there are records to display
          if ($result->rowCount() > 0)
        {
          
        while ($row = $result->fetch())
        {
          // set up a row for each record
         echo'<tr align="center">
            <td>
              <div class="btn-group" role="group">
                <a class="edit-btn">
                  <button class="btn btn-primary btn-sm edit" data-id="'.$row["id"].'">
                  <em class="fas fa-pencil-alt"></em></button> 
                </a>
  
              </div>

               <a class="delete-btn">
                  <button class="btn btn-danger btn-sm delete" data-id="'.$row["id"].'" ">
                  <em class="fas fa-trash-alt""></em></button>
                </a>
            </td>';
           

echo        "<td>" . $row['product_name'] . "</td>";
echo        "<td> $"  . $row['price'] . "</td>";
echo        "<td>" . $row['category'] . "</td>";

echo      "</tr>";
        }
echo  '   </tr> 
         </tbody>
        </table>';
        
        }
        // if there are no records in the database, display an alert message
        else
        {
          echo " No results to display!";
        }

        } // show an error if there is an issue with the database query
       


    $database->close();
?>

<?php include("modal.php")?> 
<script src="app.js"></script>
<!-- BootStrap Advance Search-->
<script type="text/javascript">
        $(document).ready(function () {

          $('#table').bootstrapTable()
        });
</script>
</body>
</html>





  