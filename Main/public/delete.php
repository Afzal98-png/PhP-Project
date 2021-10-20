<?php

session_start();


    if(isset($_POST['delete']))
    {
        $id = $_POST['delete_btn'];
        $image = $_POST['delete_image'];

        include_once 'dbh_inc.php';

        $query = "DELETE FROM features_data WHERE id='$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            unlink("upload/$image");
            $_SESSION['status'] = "Delete Successfull";
            $_SESSION['status_code'] = "success";
            header("location: features.php");
        }
        else
        {
            header("location: features.php");
        }
        
    }
    else
    {
        echo "its not working";

    }
     
?>