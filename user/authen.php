<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $USEREMAIL = $_POST["EMAIL"];
        $PASSWORD = $_POST["PASS"];
        
        include 'config.php';
        $query = "SELECT * FROM user WHERE email = '$USEREMAIL' AND password = '$PASSWORD'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        
        if(mysqli_num_rows($result) == 1){
            $name = $row['name'];
            $id = $row['id'];
            session_start();
            $_SESSION["user"] = $name;
            $_SESSION["id"] = $id;
            // header("Location: home.php");
            echo "
            <script>
                alert('Successfully Logged');
                window.location.href='home.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
                alert('Invalid Login');
                window.location.href='./pages/login.php';
            </script>
            ";
        }
    }
?>