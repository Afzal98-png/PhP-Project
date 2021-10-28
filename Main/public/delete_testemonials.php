<?php

session_start();
include_once 'functions.php';

    if(isset($_POST['delete']))
    {
        $id = $_POST['delete_btn'];
        $image = $_POST['delete_image'];

        delete_data("t_data", $id, "testemonials_images",$image, "testemonials.php");   
    }
    else
    {
        echo "its not working";

    }
     
?>