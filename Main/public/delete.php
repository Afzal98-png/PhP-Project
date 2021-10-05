<?php


    if(isset($_POST['submit']))
    {
        $id = $_POST['delete_btn'];

        include_once 'dbh_inc.php';

        $query = "DELETE FROM features_data WHERE id='$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            echo "delete done";
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