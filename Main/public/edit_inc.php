<?php

    if(isset($_POST['update_btn']))
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES["faculty_image"]['name'];

        include_once 'dbh_inc.php';

        $query = "UPDATE features_data SET title = '$title', description = '$description', image = '$image', updated_at = date('Y-m-d H:i:s') WHERE id = '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        if($result)
        {
            // unlink($path);
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/". $_FILES["faculty_image"]["name"]);
            header("location: features.php");
        }
        else
        {
            header("location: edit.php");
        }
    }

?>