<?php

// session_start();

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup_database";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    // echo "Concention successful";
}

?>
