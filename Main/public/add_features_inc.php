<?php

    if(isset($_POST["submit"]))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES["faculty_image"]['name'];
        $check = $_POST['checkbox'];

        if($check == "on")
        {
            $query = "INSERT INTO features_data
            (title, description, image, has_published)
            values('$title', '$description', '$image' , 1)";

        }
        else
        {
            $query = "INSERT INTO features_data
            (title, description, image, has_published)
            values('$title', '$description', '$image' , 0)";
        }

        include_once 'dbh_inc.php';

        

        $result= mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/". $_FILES["faculty_image"]["name"]);
            header("location: features.php");
        }
        else
        {
            header("location: add_features.php");
        }

    }
    else
    {
        echo "it's not working";
    }

?>