<?php

    session_start();

    if(isset($_POST["submit"]))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once 'dbh_inc.php';

        $query = "SELECT * FROM signup_form WHERE email = '$email' AND `password` = '$password' limit 1";
        // echo $query;
        $result = mysqli_query($conn, $query);
        
        // var_dump($result);

        $row = mysqli_num_rows($result);
        $rowvalue = mysqli_fetch_assoc($result);

        if($row > 0)
        {
            // echo $rowvalue['phonenumber'];
            $_SESSION['username'] = $rowvalue['firstname'];
            // echo $_SESSION['username'];
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