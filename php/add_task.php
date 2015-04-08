<?php
include('../config/connect.php');

if (isset($_POST['submitted'])) {
	
		$task_name 			= $_POST['task_name'];
		$sql					="INSERT INTO task (task_ID, task_name, task_feedback, task_status, task_detail) 
												VALUES ('','$task_name', '$task_feedback', '$task_status','$task_detail')";
		$result = $connection->query($sql);										
		if (!$result) {
			die('error inserting new record '.mysqli_error($connection));
		} //end of nested statement.
$newProduct = "Product has been input sucessfully";
}
?>