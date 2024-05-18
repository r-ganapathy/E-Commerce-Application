
<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head>
<style>
	body
	{
		margin: 0;
		background-color: rgb(16,32,51);
	}
	.form
	{
		display: flex;
		justify-content: center;
		align-items: center;
		color: white;
		font-size: 23px;
		padding: 10px;
	}
	form
	{
		border: 1px solid white;
		padding: 20px;
		box-shadow: black 5px 5px 50px;
	}
	.form div
	{
		margin-top: 7px;
	}
	.inp
	{
		padding: 8px;
		font-size: 22px;
		background-color: rgb(16,32,51);
		color: white;
		border: 1px solid white;
		border-radius: 30px;
	}
	.subbtn
	{
		margin-top: 5px;
		padding: 8px;
		font-size: 18px;
		background-color: white;
		color:black;
		border: 1px solid black;
		border-radius: 30px;
	}
	.Back
	{
		margin-left: 50px;
		padding: 10px;
		font-size: 20px;
		text-decoration: none;
		background-color: black;
		color: white;
		border-radius: 20px;
	}
	.head
	{
		display: flex;
		justify-content: center;
		font-size:30px;
		text-decoration:underline;
		font-weight: 900;
	}

</style>
<body>
   <?php
      $id=@$_GET["id"];
      include 'config.php';
      $query="SELECT * FROM product WHERE id= '$id'";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_array($result);
   ?>
    <div class="update">
      	<div class="form">
      		<form action="view_products.php" method="post" enctype="multipart/form-data">
      			<div class="head">Update</div>
      			<div>Product Name</div>
				<div><input class="inp" type="text" name="PNAME" id=""value="<?php echo $data['product_name']; ?>"></div>
				<div>Product Image</div>
				<div><input class="inp" type="file" name="PIMAGE" id="" value=""></div>
				<div><img src=" <?php echo $data['product_img']; ?>" alt="" srcset="" width="70px" height="70px"></div>
				<div>Product Price</div>
				<div><input class="inp" type="text" name="PPRICE" id="" value=" <?php echo $data['product_price']; ?>"></div>
				<div>Product Description</div>
				<div><input class="inp" type="text" name="PDESCRIPTION" id="" value="<?php echo $data['product_description']; ?>"></div>
				<div>Product Category</div>
				<div><input type="hidden" name="ID" value="<?php if(isset($id))
				{ 
					echo $id;
				} ?>"></div>
				<div><input class="inp" type="text" name="PCATEGORY" id="" value="<?php echo $data['product_category']; ?>"></div>
				<div><input class="subbtn" type="submit" value="Submit" ><a class="Back" href="./view_products.php">Back</a></div>
     		</form>
		</div>
	</div>
</body>
</html>
