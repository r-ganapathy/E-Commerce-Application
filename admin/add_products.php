<!DOCTYPE html>
<html>
<head>
	<title>Add_product</title>
</head>
<style>
	body
	{
		background-color: rgb(16,32,51);
		margin:0;
		font-size: 18px;
		color: white;
	}
	.middle
	{
		display:flex;
		flex-direction:row;                
	}
	.add_products
	{
		width:1100px;
		height:auto;
		background-color: rgb(16,32,51);
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.add_product
	{
		width:700px;
		display:flex;
		flex-direction: column;
		align-items: center;
	}
	.add
	{
		font-size: 20px;
		font-weight: 900;
		font-style: normal;
		text-decoration: underline;
	}
	.add_product div
	{
		margin:14px;
	}
	.inp
	{
		background-color: rgb(16,32,51);
		border:1px solid white;
		color:white;
		padding: 8px;
		font-size: 15px;
		border-radius: 30px;
	}
	.homebtn
	{
		background-color: white;
		margin-left: 40px;
		color:black;
		padding: 15px;
		border-radius: 20px;
		text-decoration: none;
	}
	.subbtn
	{
		background-color: black;
		padding:18px;
		font-size: 15px;
		color:white;
		border-radius: 20px;
	}
</style>
<body>
	<div class="admin_home">
		<?php  include 'header.php'; ?>
		<div class="middle">
			<?php  include 'sidebar.php'; ?>
			<div class="add_products">
				<div class="add_product">
					<div class="add">Add Product</div>
					<div class="form">
						<form action="insert_products.php" method="post" enctype="multipart/form-data">
							<div>Product Name</div>
							<div><input class="inp" type="text" name="PNAME" id=""></div>
							<div>Product Image</div>
							<div><input class="inp" type="file" name="PIMAGE" id=""></div>
							<div>Product Price</div>
							<div><input class="inp" type="text" name="PPRICE" id=""></div>
							<div>Product Description</div>
							<div><input class="inp" type="text" name="PDESCRIPTION" id=""></div>
							<div>Product Category</div>
							<div><input class="inp" type="text" name="PCATEGORY" id=""></div>
							<div><input class="subbtn" type="submit" value="Submit" ><a class="homebtn" href="./admin_home.php">Home</a></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>	
</html>