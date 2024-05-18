<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = rand(0000,9999);
        $name = $_POST["NAME"];
        $email = $_POST["EMAIL"];
        $phone = $_POST["PHONE"];
        $pass = $_POST["PASS"];
        $teacher = $_POST["TEACHER"];
        $school = $_POST["SCHOOL"];
        $food = $_POST["FOOD"];
        
        include 'config.php';
        $duplicatequery = "SELECT * FROM user WHERE email ='$email' ";
        $result = mysqli_query($conn,$duplicatequery);
        if(mysqli_num_rows($result)){
            echo "
            <script>
                alert('Already Exist');
                window.location.href='./pages/signup.php';
            </script>
            ";
        }else{
            $query = "INSERT INTO user (id,name,email,phone_no,password,Teacher,School,Food) VALUES ('$id','$name','$email','$phone','$pass','$teacher','$school','$food')";
            $create = "CREATE TABLE `projectdb`.`cart_$id._$name` ( `Product_Id` BIGINT(100) NOT NULL , `Product_Name` TEXT NOT NULL , `Product_Price` BIGINT(100) NOT NULL , `Product_Qty` INT(100) NOT NULL ,`Product_Img` TEXT NOT NULL) ENGINE = InnoDB";

            mysqli_query($conn,$create);
                       
            $inserted = mysqli_query($conn,$query);
            if($inserted){
                echo "
                <script>
                    alert('Signed Successfully');
                    window.location.href='./pages/login.php';
                </script>
                ";
            }
        }

    }

?>
