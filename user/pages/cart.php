<?php
    session_start();
    $id;
    $user;
    if(isset($_SESSION['id']) && isset($_SESSION["user"])){
    $id = $_SESSION["id"];
    $user = $_SESSION["user"];  
    }
    else{
        echo "
        <script>
            alert('Please Login');
            window.location.href='login.php';
        </script>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body{
        background-color: rgb(16,32,51);
        color: white;
        margin: 0;
    }
    .cartheader{
        background-color: rgb(5,6,11);
        width: auto;
        height: 70px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 400px;
    }
    .cartheading{
        font-weight: 900;
        font-size: 34px;
    }
    .text-dec{
        text-decoration: none;
        color: white;
    }
    .text-dec:hover{
        background-color: white;
        color: black;
        padding: 10px;
        border-radius: 30px;
    }
    .links{
        display: flex;
        flex-direction: row;
        gap: 60px;
        font-size: 25px;
    }
    .username{
        font-size: 25px
    }
    .carttable{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .middlecontainer{
        margin-top: 40px;
        display: flex;
        flex-direction: row;
    }
    table{
        background-color: rgb(5,6,11);
        font-size: 18px;
        margin-left: 50px;
        padding: 70px;
        border-radius: 30px;
    }
    .total{
        background-color: rgb(5,6,11);
        height: 50px;
        font-size: 20px;
        padding: 20px;
        position: relative;
        top: 200px;
        left: 200px;
        border-radius: 30px;
    }
    .remove{
        text-decoration: none;
        color: white;
        background-color: rgb(227, 116, 116);
        color: black;
        padding: 10px;
        border-radius: 30px;
    }
    .qtyno{
        width: 50px;
        background: linear-gradient(to right, black, rgb(16, 12, 31));
        color: white;
        font-size: 20px;
    }
    .updatebtn{
        padding: 10px;
        background-color: rgb(167, 215, 167);
        color: black;
        border-radius: 30px;
    }
    tr div{
        margin: 40px;
    }
    .pay{
        position: absolute;
        top: 400px;
        right: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto;
        height: 30px;
        background-color: lightblue;
        border-radius: 30px;
    }
    .pay a{
        text-decoration: none;
        color: black;
        padding: 8px;
        font-size: 18px;
    }
    .pay:hover{
        padding: 5px;
        background-color: lightgreen;
    }
</style>
<body>
    <div class="cartpage">
        <div class="cartheader">
            <div class="cartheading">My Cart</div>
            <div class="links">
                <div><a class="text-dec" href="../home.php">Home</a></div>
                <div><a class="text-dec" href="./products.php">Products</a></div>
            </div>
            <div class="username">
                <?php if(isset($_SESSION["user"])) {echo $_SESSION["user"]; }?>
            </div>
        </div>
        <div class="middlecontainer">
            <table>
                    <?php
                            include "../config.php";
                            $query = "SELECT * FROM `cart_$id._$user`";
                            $result = mysqli_query($conn,$query);
                            $total = 0;
                            while($row=mysqli_fetch_array($result)){
                                $total = $total + $row['Product_Price']*$row['Product_Qty'];
                                echo "
                                <tr>
                                <form action='../cart_update.php' method='POST'>
                                <td><div><img src='../../admin/$row[Product_Img]' width=200px height=200px /></div></td>
                                <td><div>$row[Product_Name]</div>
                                <div>$row[Product_Price]</div>
                                <input type='hidden' name='pid' value='$row[Product_Id]'>
                                <div> <input class='qtyno' type='number' min=1 max=20 name='qty' value='$row[Product_Qty]'>
                                <input class='updatebtn' type='submit' value='Update'></div>
                                <div><a class='remove'  href='../cart_remove.php?pid=$row[Product_Id]'>Remove</a></div></td>

                            
                            </form>
                            </tr>
                                ";
                            }
                    ?>
              </table>
              <div class="total">
               <div> Total Products Price  : <?php echo $total;  ?></div>
               <div></div>
            </div>
            <div class="pay"><a href="./pay.php">Proceed to pay</a></div>
        </div>
    </div>
</body>
</html>