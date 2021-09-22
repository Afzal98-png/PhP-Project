<?php

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

        require_once 'dbh.inc.php';

        $query = "INSERT INTO signup_form 
        (firstname, lastname, email, password, address, age, phonenumber, country, gender) 
        values('$firstname', '$lastname', '$email', '$password', '$address', '$age', '$phonenumber', '$country', '$gender')";
        mysqli_query($conn, $query);

        header("location: login.php");

    }
    else
    {
        header("location: signup.php"); 
    }


?>