<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .login{
        position: absolute;
    top: 100px;
    
    }
    .forgot{
        position: absolute;
        top: 310px;
        left: 170px;
        font-size: 15px;
        font-weight: 800;
    }
    .forgot a{
        text-decoration: none;
        color: rgb(165, 89, 240);;
    }
    .forgot a:hover{
        color: lightblue;
    }
</style>
<body> 
    

    <div class="login">
        <div class="head">Login</div>

        <div class="body">
            <form action="../authen.php" method="post">
                <div class="email">Email</div>
                <div class="email_input"><input class="inputbtn" type="email" name="EMAIL" id="" required></div>
                <div class="password">Password</div>
                <div class="password_input"><input class="inputbtn" type="password" name="PASS" id="" required></div>
                <div class="submit"><input class="submitbtn" type="submit" value="Submit"></div>
            </form>
        </div>
        <div class="forgot"><a href="./forgotpassword.php">forget password?</a></div>
        <div class="foot">

            <div class="signup">Haven't Any Account? <a href="./signup.php" style="text-decoration: none; color: blueviolet;">Signup</a></div>
            <div class="admin">Are you Admin? <a href="../../admin/login.php" style="text-decoration: none; color: blueviolet;">Admin</a></div>
        </div>
        
    </div>

</body>
</html>