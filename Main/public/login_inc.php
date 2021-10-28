<?php

    session_start();

    if(isset($_POST["submit"]))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once 'dbh_inc.php';

        $query = "SELECT * FROM signup_form WHERE email = '$email' limit 1";
        
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $rowvalue = mysqli_fetch_assoc($result);

            if(password_verify($password, $rowvalue['password']))
            {
                $_SESSION['username'] = $rowvalue['firstname'];
                $_SESSION['status'] = "Log In Successfully";
                $_SESSION['status_code'] = "success";
                header("location: features.php");
            }
            else
            {
                $_SESSION['error'] = "Log In Error";
                // $_SESSION['status_code'] = "success";
                header("location: login.php" );
            }
            
            
        

    }
    else
    {
        header("location: signup.php"); 
    }
     
?>