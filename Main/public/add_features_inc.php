<?php

    session_start();
    include_once 'functions.php';

    if(isset($_POST["submit"]))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $upload_time = time();
        $image = $upload_time.'-'.$_FILES["faculty_image"]['name'];
        $checkbox = $_POST['checkbox'];
        $image_path = "features_images";
        $success_path = "features.php";
        $error_path = "add_features.php";

        if($checkbox == "on")
        {
            add_database("features_data", $title, $description, $image, "1", $upload_time, $image_path, $success_path, $error_path);
        }
        else 
        {
            add_database("features_data", $title, $description, $image, "0", $upload_time, $image_path, $success_path, $error_path);
        }
    }
    else
    {
        echo "it's not working";
    }

?>