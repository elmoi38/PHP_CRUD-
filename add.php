<?php
	include_once('db_connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO til_products (product_name, price, category) VALUES (:product_name, :price, :category)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':product_name' => $_POST['product_name'] , ':price' => $_POST['price'] , ':category' => $_POST['category'])) ){
			$output['message'] = 'Member added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add member';
		} 
		   
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>