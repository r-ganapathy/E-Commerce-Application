<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body
    {
        background-color: rgb(16,32,51);
        margin:0;
        font-size:18px;
    }
    .middle
    {
        display: flex;
        flex-direction: row;
    }
    .stats
    {
        width:1100px;
        height: auto;
        background-color: rgb(16,32,51);
    }
    .product_list
    {
        display: flex;
        justify-content: center;
    }
    thead
    {
        background-color: black;
        color:white;
    }
    tbody
    {
        background-color: rgb(16,32,51);
        font-size: 20px;
        color:white;
    }
    .update
    {
        text-decoration: none;
        background-color: green;
        padding: 10px;
        color: white;
    }
    .delete
    {
        text-decoration: none;
        background-color: red;
        padding:10px;
        color:white;
    }
</style>
    <div class="admin_home">
        <?php include "header.php"; ?>
        <div class="middle">
            <?php include "sidebar.php"; ?>
            <div class="stats">
                <div class="product_list">
                    <table border="1" cellpadding="5">
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                include "config.php";
                                $query = "SELECT * FROM product";
                                $select = mysqli_query($conn,$query);
                                while($row=mysqli_fetch_array($select)){
                                    echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[product_name]</td>
                                    <td>$row[product_price]</td>
                                    <td><img src='$row[product_img]' width='150px' height='150px'</td>
                                    <td>$row[product_description]</td>
                                    <td>$row[product_category]</td>
                                    <td><a class='update' href='update.php?id=$row[id]'>Update</a></td>
                                     <td><a class='delete' href='delete.php?id=$row[id]'>Delete</a></td>                                    

                                </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
<?php
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $p_name=$_POST["PNAME"];
    $p_image= $_FILES["PIMAGE"];
    $p_price=$_POST["PPRICE"]; 
    $p_description=$_POST["PDESCRIPTION"];
    $p_category=$_POST["PCATEGORY"];
    $id=$_POST["ID"];
    $img_loc=$p_image["tmp_name"];
    $img_name=$p_image["name"];
    include 'config.php';
    $img_destination="uploads/".$img_name;
    move_uploaded_file($img_loc,$img_destination);
    $query="UPDATE `product` SET `product_name`='$p_name',`product_price`=$p_price,`product_category`='$p_category',`product_description`='$p_description',`product_img`='$img_destination' WHERE id=$id";
    $update=mysqli_query($conn,$query);
}
?>