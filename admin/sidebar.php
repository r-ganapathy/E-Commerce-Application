<!DOCTYPE html>
<html>
<head>
	<title>sidebar</title>
</head>
<style>
.dashboard
{
	width:300px;
	height:auto;
	background-color: black;

}
.list
{
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;

}
.list a
{
	text-decoration: none;
	font-size: 23px;
	color: white;
	width:100%;
	padding:15px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.list a:hover
{
	background-color: white;
	color: black;
}
</style>
<body>
     <div class="dashboard">
     <div class= "list">
     <a href="./admin_home.php"><div>Home</div></a>
     <a href="./add_products.php"><div>Add Products</div></a>
     <a href="./view_products.php"><div>View Product</div></a>
     <a href="./view_user.php"><div>View User</div></a>
    </div>
   </div>

</body>
</html>