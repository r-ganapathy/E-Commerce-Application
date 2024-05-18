<?php
        session_start();
        $username;
        if(isset($_SESSION["user"])){
            $username = $_SESSION["user"];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product Info</title>
</head>
<style>
    body{
        background-color: rgb(16,32,51);
        color: white;
        margin: 0;
    }
    .view_product_info_page{
        display: flex;
        flex-direction: column;
    }
    .product_info{
        margin-top: 50px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 200px;
    }
    .product_contexts{
        font-size: 25px;
        display: grid;
        row-gap: 20px;
    }
    input{
        margin-top: 20px;
    }
    .btn{
        margin-top: 30px;
        padding: 5px;
        margin-bottom: 20px;
    }
    </style>

<body>

    <div class="view_product_info_page">
        <div><?php include "../components/product_header.php"; ?></div>
        <div class='product_info'>
        <?php
        $pid = $_GET["pid"];
        $dec = base64_decode($pid);
        include "../config.php";
        $query = "SELECT * FROM product WHERE id = $dec";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        echo "<div class='product_img'>
            <img  src='../../admin/$row[product_img]' width=400px height=400px'>
            </div>
            <div class='product_contexts'>
            <div>$row[product_name]</div>
            <div>$row[product_price]</div>
            <div>$row[product_category]</div>
            <div>$row[product_description]</div>
            <div>
                <form action='../cart_add.php?pid=$row[id]' method='post' >
            Quantity : <input type='number' name='qty' id='' value='' min='1'>
            <input type='hidden' name='pid' value='$row[id]'>
            <input type='hidden' name='pimg' value='$row[product_img]'>
            <input type='hidden' name='pname' value='$row[product_name]'>
            <input type='hidden' name='pprice' value='$row[product_price]'>
           <input class='btn' type='submit'  value='Add To Cart' name='addcart'>
                 </form>
            </div>
            </div>";
        ?>   
        
</div>
    </div>
</body>
</html>

































































































































































































































































































































































































































































































































































































