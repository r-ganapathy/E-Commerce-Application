<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION["user"])){
        $id = $_SESSION["id"];
        $user = strtolower($_SESSION["user"]);
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $pid = $_POST["pid"];
            $pimg  = $_POST["pimg"];
            $pname = $_POST["pname"];
            $pprice = $_POST["pprice"];
            $pqty = $_POST["qty"];
            include "config.php";
            $duplicatequery = "SELECT * FROM `cart_$id._$user` WHERE Product_Id = '$pid'";
    
            $duplicate_result = mysqli_query($conn,$duplicatequery);
            if($duplicate_result){
                echo "success";
            }
            else{
                echo 'sad';
            }
            if(mysqli_num_rows($duplicate_result)){
                echo "
                <script>
                    alert('Already Exist');
                    window.location.href='./pages/cart.php';
                </script>
                ";
            }
            else{
                $insert = "INSERT INTO `cart_$id._$user`(`Product_Id`, `Product_Name`, `Product_Price`, `Product_Qty`,`Product_Img`) VALUES ('$pid','$pname','$pprice','$pqty','$pimg')";
            
        
        
                $inserting = mysqli_query($conn,$insert);
                if($inserting){
                    echo "
                    <script>
                        alert('Cart Added Successfully');
                        window.location.href='./pages/cart.php';
                    </script>
                    ";
                }
            } 
        }
    }
    else{
        echo "
        <script>
            alert('Please Login');
            window.location.href='./pages/login.php';
        </script>
        ";
    }

?>