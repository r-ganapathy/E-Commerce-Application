<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<style>
    .signup_page{
        position: absolute;
        top: 10px;
        left: 100px;
        padding: 8px;
        width: 400px;
        height: auto;
    }
    .securityq{
        position: absolute;
        background-color: black;
        top: 100px;
        right: -600px;
        padding: 8px;
        border-radius: 30px;
        font-size: 17px;
    }
    .heading{
        margin-bottom: 40px;
        display: flex;
        justify-content: center;
        font-weight: 900;
    }
</style>
<body>

    <div class="signup_page">
        <div class="head">Register</div>
        <div class="body">
            <form action="../insert_user.php" method="post">
                <div class="name">Name</div>
                <div class="name_input"><input class="inputbtn" type="text" name="NAME" id="" required></div>
                <div class="email">Email</div>
                <div class="email_input"><input class="inputbtn" type="email" name="EMAIL" id="" required></div>
                <div class="phoneno">Phone No</div>
                <div class="phoneno_input"><input class="inputbtn" type="text" name="PHONE" id="" required></div>
                <div class="password">Password</div>
                <div class="password_input"><input class="inputbtn" type="password" name="PASS" id="" required></div>
                <div class="securityq">
                    <div class="heading">Security Questions</div>
                    <div>What is Your First Teacher Name  ?</div>
                    <div><input class="inputbtn" type="text" name="TEACHER" required></div>
                    <div>What is Your First School Name ?</div>
                    <div><input class="inputbtn" type="text" name="SCHOOL" required></div>
                     <div>What is Your favourite food ?</div>
                    <div><input class="inputbtn" type="text" name="FOOD" required></div>
                </div>
                <div class="submit"><input class="submitbtn" type="submit" value="Submit"></div>
            </form>
        </div>
        <div class="foot">
            <div>Are you go back to login? <a href="./login.php" style="text-decoration: none; color: blueviolet;">Login</a></div>
        </div>
        
    </div>
    
</body>
</html>