<?php
    session_start();
    $id = $_SESSION["id"];
    $user = $_SESSION["user"];  
    $pid = $_GET["pid"];
    include "config.php";
    $query = "DELETE FROM `cart_$id._$user` WHERE Product_Id = '$pid'";
    $result = mysqli_query($conn,$query);
    if($result){
        header("Location: ./pages/cart.php");
    }

?>