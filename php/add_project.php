<?php
include('../config/connect.php');

if (isset($_POST['submitted'])) {
	
		$project_name 			= $_POST['project_name'];
		$sql					="INSERT INTO project (Project_ID, Project_Name) 
												VALUES ('','$project_name')";
		$result = $connection->query($sql);										
		if (!$result) {
			die('error inserting new record '.mysqli_error($connection));
		} //end of nested statement.
$newProduct = "Product has been input sucessfully";
}
?>