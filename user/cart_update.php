<?php
    session_start();
    $id = $_SESSION["id"];
    $user = $_SESSION["user"];  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $qty = $_POST["qty"];
        $pid = $_POST["pid"];
       
        include "config.php";
        $query = "UPDATE `cart_$id._$user` SET `Product_Qty` = '$qty' WHERE  `Product_Id` = '$pid'";
        $update = mysqli_query($conn,$query);
        if($update){
            header("Location: ./pages/cart.php");
        }
    }

?>