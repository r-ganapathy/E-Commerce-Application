<?php
	$id = $_GET["id"];
	include "config.php";
	$query = "DELETE FROM product WHERE id = $id";
	$result = mysqli_query($conn,$query);
	if($result){
		header("Location: view_products.php");
	}
?>