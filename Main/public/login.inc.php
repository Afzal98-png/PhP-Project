<?php

    if(isset($_POST["submit"]))
    {
        // echo "it works";


        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "$email";
        echo "<br>";
        echo "$password";
    
        

        require_once 'dbh.inc.php';

        $query = "Select * from signup_form where email='$email' AND 
        password = '$password'";

        $result = mysqli_query($conn, $query);

        $num = mysqli_num_rows($result);

        echo "<br>";
        echo "$num";
        
        if($num == 1)
        {
            $login = true;
            header("location: index.php");
        }

    }
    else
    {
        header("location: signup.php"); 
    }


?>