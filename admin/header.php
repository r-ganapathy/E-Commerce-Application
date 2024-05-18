<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header
{
    display:flex;
    background-color: rgb(5,4,15);
    height: 50px;
    width: auto;
    color: white;
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    padding:10px;
    gap:900px;
}
.headings
{
    font-size: 30px;
}
.header .logs{
    display:flex;
    align-self:center;
    font-size: 20px;
    gap:20px;

}
.header .sigs
{
    display:flex;
    align-self: center;
    gap:20px;
}
.header .sig a
{
   
    text-decoration: none;
    color: white;
    border:1px solid white;  
}
.header .sigs a:hover
{
    background-color: white;
    color: black;
}
.log{
    text-decoration: none;
    color: white;
    padding: 5px;
    border-radius: 40px;
}
</style>
<body>
    <?php
        session_start();
    ?>
    <div class="header">
        <div class="logs">
            <div class="logo"><img src="" alt=""></div>
            <div class="headings">My Store</div>
        </div>
        <div class="sigs">
            <div>Hello, <?php if(isset($_SESSION['user_name'])) echo $_SESSION["user_name"]; ?></div>
            <div><?php if(isset($_SESSION["user_name"])){
                echo "<a class='log' href='./logout.php'> Logout </a>";
            } 
            else{                
                echo "<a class='log' href='./login.php'> Login </a>";
            }
                ?></div>
        </div>
    </div>
</body>
</html>