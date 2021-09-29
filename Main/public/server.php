<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    echo "Connection was successful";
}
else
{
    echo "Connection was failed";
}

?>