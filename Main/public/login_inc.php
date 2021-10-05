<?php

    session_start();

    if(isset($_POST["submit"]))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once 'dbh_inc.php';

        $query = "SELECT * FROM signup_form WHERE email = '$email' limit 1";
        
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $row = mysqli_num_rows($result);
        $rowvalue = mysqli_fetch_assoc($result);

      
        
            // echo $rowvalue['phonenumber'];
            if(password_verify($password, $rowvalue['password']))
            {
                $_SESSION['username'] = $rowvalue['firstname'];
                header("location: admin.php");
            }
            else
            {
                header("location: login.php" );
            }
            
            
        

    }
    else
    {
        header("location: signup.php"); 
    }
     
?>