<?php
	include_once('../config/connect.php');
	include('header2.php');
	if (!isset($_POST['name'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM product WHERE ID = '$id'";
		$result = $connection->query($query);
		if (!$result){
			die ('wrong'.mysqli_error($connection));
		}
		$row = mysqli_fetch_array($result);
		$proid = $row['ID'];
		$name = $row['NAME'];
		$number = $row['STOCK'];
		$price = $row['PRICE'];
		$description = $row['DESCRIPTION'];
		
	}
?>