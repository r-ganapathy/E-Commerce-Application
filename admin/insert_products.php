<?php
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  	$p_name=$_POST["PNAME"];
  	$p_image=$_FILES["PIMAGE"];
  	$p_price=$_POST["PPRICE"];
  	$p_description=$_POST["PDESCRIPTION"];
  	$p_category=$_POST["PCATEGORY"];
  	$img_loc=$p_image["tmp_name"];
  	$img_name=$p_image["name"];

  	include 'config.php';
  	$img_destination="uploads/".$img_name;
  	move_uploaded_file($img_loc,$img_destination);
  	$query="INSERT INTO `product`(`product_name`,`product_price`,`product_category`,`product_description`,`product_img`)VALUES('$p_name','$p_price','$p_category','$p_description','$img_destination')";
  	$insert=mysqli_query($conn,$query);
  	header("location: view_products.php");
  }
  ?>