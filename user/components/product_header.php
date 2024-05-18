<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php if(isset($_SESSION["user"])) {echo $_SESSION["user"]; }?></title>
</head>
<style>
    .navigation {
        background-color: rgb(5, 4, 15);
        width: 100%;
        height: 75px;
        display: flex;
        color: white;
        gap: 300px;
        justify-content: center;
        align-items: center;
        font-size: 22px;
    }
    a{
        text-decoration: none;
        color: white;
    }
    .navigation .logo {
        display: flex;
        font-size: 30px;
        font-family: Viner Hand ITC;
        font-weight: 900;
    }

    .navigation .navbar {
        display: flex;
        gap: 30px;
        font-family: Constantia;
    }

    .navigation .navbar a {
        color: white;
        text-decoration: none;
    }
    .navigation .navbar a:hover{
        background-color: white;
        border-radius: 30px;
        color: black;
        padding: 10px;
    }

    .navigation .login {
        display: flex;
        color: white;
        text-decoration: none;
        font-family: Constantia;
        border: 1px solid white;
        padding: 5px;
        border-radius: 20px;
    }

    .navigation .login:hover {
        background-color: white;
        color: black;

    }

    .logss {
        display: flex;
        gap: 20px;
    }
    .cart{
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }
    .cart a{
        text-decoration: none;
        color: white;

    }
    .cart a:hover{
        background-color: white;
        border-radius: 30px;
        color: black;
        padding: 6px;
    }
    .username {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .search{
        background-color: rgb(5, 4, 15);
        border: 1px solid white;
        border-radius: 30px;
        position: absolute;
        top: 20px;
        left: 850px;
        width: 200px;
        height: 30px;
        font-size: 20px;
    }
    .search:hover{
        background-color: white;
        color: black;
    }
</style>

<body>

    <div class="navigation">
        <div class="logo">
            <div><img src="" alt=""></div>
            <a href="../home.php"><div class="heading">Artisan-ECom</div></a>
        </div>
        <div class="navbar">
            <div><a href="../pages/products_male.php">Men</a></div>
            <div><a href="../pages/products_female.php">Women</a></div>
            <div><a href="../pages/products_others.php">Others</a></div>
           <form action="../pages/search.php" method="post">
           <input class="search" type="text" name="keyword" id="">
           </form>
        </div>
        <div class="logss">
            <div class="username">
                <?php if(isset($_SESSION["user"])) {echo $_SESSION["user"]; }?>
            </div>
            <div>
                <?php 
                            if(isset($_SESSION["user"])){
                                echo '<a href="../logout.php" class="login">Logout</a>';
                            }
                            else{
                                echo '<a href="login.php" class="login">Login</a>';
                            }
                        ?>
            </div>
            <div class="cart">
                <a  href="./cart.php">Cart</a>
            </div>
        </div>
    </div>
</body>

</html>