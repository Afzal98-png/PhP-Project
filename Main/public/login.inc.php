<?php

    if(isset($_POST["submit"]))
    {
        // echo "it works";


        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once 'dbh.inc.php';

        $query = "SELECT * FROM signup_form";

        $result = mysqli_query($conn, $query);

        $num = mysqli_num_rows($result);


        echo $num;

        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);


    }
    else
    {
        header("location: signup.php"); 
    }


?>