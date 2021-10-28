<?php

session_start();
include_once 'functions.php';

    if(isset($_POST['delete']))
    {
        $id = $_POST['delete_btn'];
        $image = $_POST['delete_image'];

        delete_data("features_data", $id, "features_images", $image, "features.php");
        
    }
    else
    {
        echo "its not working";

    }
     
?>