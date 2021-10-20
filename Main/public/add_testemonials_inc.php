<?php

session_start();

    if(isset($_POST["submit"]))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $upload_time = time();
        $image = $upload_time.'-'.$_FILES["faculty_image"]['name'];
        $check = $_POST['checkbox'];

        if($check == "on")
        {
            $query = "INSERT INTO t_data
            (title, description, image, has_published)
            values('$title', '$description', '$image' , 1)";

        }
        else
        {
            $query = "INSERT INTO t_data
            (title, description, image, has_published)
            values('$title', '$description', '$image' , 0)";
        }

        include_once 'dbh_inc.php';

        

        $result= mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload_img_testemonials/".$upload_time.'-'.$_FILES["faculty_image"]["name"]);
            $_SESSION['status'] = "Added Successfull";
            $_SESSION['status_code'] = "success";
            header("location: testimonials.php");
        }
        else
        {
            header("location: add_testimonials.php");
        }

    }
    else
    {
        echo "it's not working";
    }

?>