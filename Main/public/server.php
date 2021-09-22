<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    echo "Connection was successful";
    if(isset($_POST["submit"]))
    {
        echo "it works";
    }
}
else
{
    echo "Connection was failed";
}


// else
// {
//     header("location: signup.php");
// }

// if($_SERVER['REQUEST_METHOD'] == "POST")
// {
    
//     $firstname =  $_POST['first-name'];
//     $lastname =  $_POST['last-name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $address = $_POST['address'];
//     $age = $_POST['age'];
//     $phonenumber = $_POST['phonenumber'];
//     $country = $_POST['country'];
//     $gender = $_POST['gender'];

//     $query = "insert into signup_form 
//     (firstname, lastname, email, password, address, age, phonenumber, country, gender) 
//     values('$firstname', '$lastname', '$email', '$password', '$address', '$age', '$phonenumber', '$country', '$gender')";
//     mysqli_query($conn, $query);

 
// }



?>