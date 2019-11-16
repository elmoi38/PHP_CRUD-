<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.6.2/core.min.js"></script>


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
 
  
      <table class="table">
        <thead>
          <tr align="center">
            <th><em class="fa fa-cog"></em></th>
            <th>Product Name</th>
            <th>Cost</th>
            <th>Category</th>
           
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
echo        "<td>" . $row['price'] . "</td>";
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


</body>
</html>





  