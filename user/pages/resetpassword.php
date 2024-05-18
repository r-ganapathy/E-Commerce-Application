<?php
    session_start();
    $email = $_SESSION["useremail"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: rgb(16,32,51);
        color: white;
        margin: 0;

    }
    .form{
        position: absolute;
        top: 150px;
        right: 550px;
        padding: 40px;
        background-color: black;
        font-size: 20px;
        border-radius: 30px;
        box-shadow: rgb(58, 47, 95) 5px 5px 50px;
    }
    .form div{
        margin-top: 30px;
    }
    .inputbtn{
        background: linear-gradient(to right, black, rgb(16, 12, 31));
        color: white;
        padding: 5px;
        font-size: 18px;
        border-radius: 30px;
    }
    .btn{
        background-color: lightgreen;
        padding: 8px;
        font-size: 15px;
        border-radius: 30px;
        margin-top: 20px;
    }

</style>
<body>
    <div class="form">
        <form action="" method="post">
            <div>Enter New Password</div>
            <div><input class='inputbtn' type="password" name="PASS" id="" required></div>
            <div>Re-Enter New Password</div>
            <div><input class='inputbtn' type="password" name="REPASS" id="" required></div>
            <div><input class="btn" type="submit" value="Confirm"></div>
        </form>
    </div>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pass = $_POST["PASS"];
        $repass = $_POST["REPASS"];
        if($pass == $repass){
        include "../config.php";
           $update = "UPDATE `user` SET `password` = '$pass' WHERE `email` = '$email'";
           $updating = mysqli_query($conn,$update);
           if($updating){
            echo "
            <script>
                alert('Successfully Reseted');
                window.location.href='./login.php';
            </script>
            ";
           }
        }
        else{
            echo "
            <script>
                alert('Does not same');
                window.location.href='./resetpassword.php';
            </script>
            ";
        }
    }
?>