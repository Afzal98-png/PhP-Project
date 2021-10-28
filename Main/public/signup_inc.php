<?php

session_start();

    if(isset($_POST["submit"]))
    {
        echo "it works";
    
        $firstname =  $_POST['first-name'];
        $lastname =  $_POST['last-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $phonenumber = $_POST['phonenumber'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        require_once 'dbh_inc.php';

        $query = "INSERT INTO signup_form 
        (firstname, lastname, email, password, address, age, phonenumber, country, gender) 
        values('$firstname', '$lastname', '$email', '$hash', '$address', '$age', '$phonenumber', '$country', '$gender')";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            $_SESSION['status'] = "Sign Up Successfully";
            $_SESSION['status_code'] = "success";
            header("location: login.php");
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