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
        
    }
    .email{
        position: absolute;
        top: 200px;
        left: 150px;
        padding: 30px;
        background-color: black;
        font-size: 20px;
        border-radius: 30px;
        box-shadow: rgb(58, 47, 95) 5px 5px 50px;
    }
    .email div{
        margin-top: 20px;
    }
    .securityq{
        position: absolute;
        top: 100px;
        right: 300px;
        padding: 30px;
        background-color: black;
        font-size: 20px;
        border-radius: 30px;
        box-shadow: rgb(58, 47, 95) 5px 5px 50px;
    }
    .heading{
        font-size: 23px;
        margin-bottom: 30px;
    }
    .securityq div{
        margin-top: 20px;
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
<?php
   
        $ee = @$_GET["email"];

?>
    <div class="form">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="email">
                <div>Enter Your Email Address </div>
                <div><input class='inputbtn' type="email" name="EMAIL" value="<?php if(isset($ee)){ echo $ee; } ?>" required></div>
            </div>
            <div class="securityq">
                    <div class="heading">Answer the Security Questions</div>
                    <div>What is Your First Teacher Name  ?</div>
                    <div><input class='inputbtn'  type="text" name="TEACHER" required></div>
                    <div>What is Your First School Name ?</div>
                    <div><input  class='inputbtn'  type="text" name="SCHOOL" required></div>
                    <div>What is Your favourite food ?</div>
                    <div><input  class='inputbtn'  type="text" name="FOOD" required></div>
                    <div><input class='btn' type="submit" value="Reset Password"></div>
            </div>
            
        </form>
    </div>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST["EMAIL"];
        $teacher = $_POST["TEACHER"];
        $school = $_POST["SCHOOL"];
        $food = $_POST["FOOD"];
        session_start();
        $_SESSION["useremail"] = $email;
        include "../config.php";
        $query1 = "SELECT * FROM user WHERE email = '$email'";
        $fetch_email = mysqli_query($conn,$query1);
        if(mysqli_num_rows($fetch_email)){
            $query2 = "SELECT * FROM user WHERE email = '$email' AND Teacher = '$teacher' AND School = '$school' AND Food = '$food'";
            $fetch_questions = mysqli_query($conn,$query2);
            if(mysqli_num_rows($fetch_questions)){
                header("Location: resetpassword.php");
            }
            else{
                echo "
                <script>
                    alert('Wrong Answer');
                    window.location.href='./forgotpassword.php?email=$email';
                </script>
                ";
            }
        }
        else{
            echo "
            <script>
                alert('Invalid Email');
                window.location.href='./forgotpassword.php?email=$email';
            </script>
            ";
        }
    }
?>