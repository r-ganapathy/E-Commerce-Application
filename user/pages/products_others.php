<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        background-color: rgb(16,32,51);
        width: 100%;
        height: 100vh;
        color: white;
    }
    .productlist{
        display: grid;
        grid-template-columns: auto auto auto auto;
        margin-top: 100px;
        column-gap: 20px;
        row-gap: 50px;
        margin-left: 30px;
    }
    .product{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: black;
        width: 250px;
        padding: 10px;
        border-radius: 30px;
    }
    .btn{
        margin-top: 30px;
        padding: 5px;
        margin-bottom: 20px;
        background-color: rgba(240, 248, 255, 0.672);
        border-radius: 20px;
        color: black;
        font-size: 16px;
        font-weight: 600;   
    }
    .btn:hover{
        padding: 10px;
    }
</style>
<body>
    <?php 
        session_start();
    ?>
    <div class="productpage">
            <?php include "../components/product_header.php"; ?>
            <div class="productlist">
                <?php
                    include "../config.php";
                    $query = "SELECT * FROM product WHERE product_category = 'other'";
                    $result = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){
                        $enc = base64_encode($row['id']);
                        echo "<div class='product'>";
                        echo "<div><img src='../../admin/$row[product_img]' width=200px height=200px></div>
                        <div>$row[product_name]</div>
                        <div>$$row[product_price]</div>";
                        echo "<div><form action='product_info.php?pid=$enc' method='post'>

                        <input class='btn' type='submit' name='cart' value='View Details'>
                    </form></div>";
                        echo "</div>";
                    }
                ?>
            </div>
    </div>
</body>
</html>
<!-- <input type='hidden' name='pname' value='$row[product_name]'>
                        <input type='hidden' name='pimh' value='$row[product_img]'>
                        <input type='hidden' name='pprice' value='$row[product_price]'>
                        <input type='hidden' name='pcat' value='$row[product_category]'>
                        <input type='hidden' name='pdesc' value='$row[product_description]'> -->