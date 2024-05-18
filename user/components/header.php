<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    a {
        text-decoration: none;
        color: white;
    }

    .header .navigation .logo {
        display: flex;
        font-size: 30px;
        font-family: Viner Hand ITC;
        font-weight: 900;
    }

    .header .navigation .navbar {
        display: flex;
        gap: 50px;
        font-family: Constantia;
    }

    .header .navigation .navbar a {
        color: white;
        text-decoration: none;
    }
    .header .navigation .navbar a:hover{
        background-color: white;
        border-radius: 30px;
        color: black;
        padding: 10px;
    }

    .header .navigation .login {
        display: flex;
        color: white;
        text-decoration: none;
        font-family: Constantia;
        border: 1px solid white;
        padding: 5px;
        border-radius: 20px;
    }

    .header .navigation .login:hover {
        background-color: white;
        color: black;
        padding: 10px;
    }

    .logss {
        display: flex;
        gap: 20px;
    }

    .username {
        display: flex;
        justify-content: center;
        align-items: center;
    }


</style>

<body>
    

    <div class="navigation">
        <div class="logo">
            <div><img src="" alt=""></div>
            <a href="home.php">
                <div class="heading">Artisan-ECom</div>
            </a>
        </div>
        <div class="navbar">
            <div><a href="">Home</a></div>
            <div><a class="hovering" href="./pages/products.php">Product</a></div>
            <div><a href="#footer">Contact</a></div>
        </div>
        <div class="logss">

            <div class="username">
                <?php if(isset($_SESSION["user"])) {
                        echo "<a href='myprofile.php?$_SESSION[user]'>".$_SESSION["user"]."</a>";
                         }
                         else{
                            echo " <a href='./pages/login.php'>My Profile</a>";

                         }
                         ?>
            </div>
            

            <div>
                <?php 
                            if(isset($_SESSION["user"])){
                                echo '<a href="logout.php" class="login">Logout</a>';
                            }
                            else{
                                echo '<a href="./pages/login.php" class="login">Login</a>';
                            }
                        ?>
            </div>
        </div>
    </div>
</body>

</html>