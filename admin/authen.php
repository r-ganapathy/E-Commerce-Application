<?php
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  	// $username="";
  	// $password="";
  	// $check_username=preg_match_all("/^[A-Za-z]+$/", $POST["USER"]);
  	// $check_password=preg_match_all("?=[A-Za-z])(?=.\d)[A-Za-z\d]{8,}$/",$_POST["PASS"]);
  	// if($check_username && $check_username)
  	// {
  		$username=$_POST["user"];
  		$password=$_POST["pass"];
 
  		include "config.php";
  		$query="select * from admin";
  		$result = mysqli_query($conn,$query);
  	
  		session_start();
  		$_SESSION["user_name"]=$username;
  		while($row=mysqli_fetch_array($result))
  		{
  			if($row["username"]==$username&&$row['password']==$password)
  			{
  				header("location:admin_home.php");
  			}
  			else{
  				 header("location:login.php?message=Invalid login");
  			}
  		}
  	// }
  	// else{
  	// 	header("location:login.php?message=invalidloginorinvalidentry");
  	// }
  }
  