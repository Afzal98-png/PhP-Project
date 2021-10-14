<?php


    if(isset($_POST['delete']))
    {
        $id = $_POST['delete_btn'];
        $image = $_POST['delete_image'];

        include_once 'dbh_inc.php';

        $query = "DELETE FROM t_data WHERE id='$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            unlink("upload_img_testemonials/$image");
            echo "delete done";
            header("location: testimonials.php");
        }
        else
        {
            header("location: testimonials.php");
        }
        
    }
    else
    {
        echo "its not working";

    }
     
?>