<?php


    if(isset($_POST["submit"]))
    {
        echo "it workscccc";
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES["faculty_image"]['name'];

        
        echo "<br>";
        echo "$image";

        include_once 'dbh_inc.php';

        
        $query = "INSERT INTO features_data
        (title, description, image)
        values('$title', '$description', '$image')";

        $result= mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/". $_FILES["faculty_image"]["name"]);
            echo "it working";
            header("location: features.php");
        }
        else
        {
            echo "its not working";
            header("location: add_features.php");
        }

    


    }
    else
    {
        echo "it not working";
    }


?>