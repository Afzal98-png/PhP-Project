<?php

    session_start();
    if(!(isset($_SESSION['username'])))
    {
        header("location: login.php");
    }

?>

<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Testemonials</title>
        <link rel="stylesheet" href="styles.css">
        <script defer src="alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <script src="alert.js"></script>
        
    </head> 

    <?php

        include_once 'admin_header.php';

    ?>

    <?php

        

    ?>

        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6">

            <div class="hidden bg-black text-white rounded-md shahdow-md pt-10 m-1 md:flex md:flex-col">
        
                <div class="font-black text-lg mb-12 mt-2 self-center">
                    <h1>Computer World</h1>
                </div>

                <div class="font-bold pl-8 min-h-screen">
                    <a href="features.php"><h1>Features</h1></a>
                    <a href="testimonials.php"><h1>Testemonials</h1></a>
                </div>

            </div>



            <div class="bg-gray-200 rounded-md shahdow-md mx-1 my-1 p-12  md:col-span-3 lg:col-span-5">

                <div class="grid grid-cols-2">
                    <div class="font-bold text-lg">
                        Edit Features
                    </div>

                    <div class="justify-self-end">
                        <button class="bg-black text-white text-lg rounded-md shadow-md px-2 py-1 font-bold"><a href="testimonials.php">Show All</a></button>
                    </div>
                </div>

                <?php

                    if(isset($_POST['edit_btn']))
                    {

                        $id = $_POST['edit_data'];

                        include_once 'dbh_inc.php';

                        $query = "SELECT * FROM t_data WHERE id = '$id'";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        $row = mysqli_num_rows($result);
                        
                        if($row > 0)
                        {
                            $rowvalue = mysqli_fetch_assoc($result);

                         ?>
                            <div class="min-h-screen grid place-content-center">
                                        
                                <div class="bg-white text-black rounded-md shadow-md px-12 py-20 my-20">

                                    <form action="" name="edit_form" id="edit_features_form" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?php echo $rowvalue['id'] ?>" >

                                        <label class="font-bold" >Title</label>
                                        <input class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="title" onkeyup="validateform()" value="<?php echo $rowvalue['title'] ?>" name="title" type="text" placeholder="Enter Title">

                                        <div class="h-5"><i><span id="text-title" class="font-medium text-xs"></span></i></div>

                                        <label class="font-bold">Description</label>
                                        <input type="text"class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="description" onkeyup="validateform()" value="<?php echo $rowvalue['description'] ?>" name="description" type="text" placeholder="Enter Description">

                                        <div class="h-5"><i><span id="text-description" class="font-medium text-xs"></span></i></div>

                                        <label class="font-bold">Image</label>
                                        <input class="border-2 border-black rounded-md shadow-md px-1 py-1 block mb-1" id="image" oninput="validateform()" type="file" name="faculty_image" id="faculty_image">

                                        <img class="w-20 h-20 mb-4" src="upload_img_testemonials/<?php echo $rowvalue['image'] ?> "alt="current image">
                                        <input type="hidden" name="previous_image" value="<?php echo $rowvalue['image'] ?>" >

                                        <input class="" type="checkbox" name="checkbox" <?php if($rowvalue['has_published'])
                                        {
                                            ?>
                                            checked
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                        
                                            <?php

                                        } ?>>
                                        <label class="text-sm font-bold pl-1">Publish</label>
                                        
                                        <div class="mt-2">
                                            <button class="font-bold bg-black text-white px-2 py-1 rounded-md shadow-md" id="submit_btn" type="submit" name="update_btn">Update</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                            <?php

                        }

                    }         
                    else if(isset($_POST['update_btn']))
                    {
                        $id = $_POST['id'];
                        $title_current = $_POST['title'];
                        $description_current = $_POST['description'];
                        $upload_time = time();
                        $image = $upload_time.'-'.$_FILES["faculty_image"]['name'];
                        $p_image = $_POST['previous_image'];
                        
                        
                        if(isset($_POST['checkbox']))
                        {
                            $check = "on";
                        }
                        else
                        {
                            $check = "off";
                        }

                        include_once 'dbh_inc.php';

                        if($_FILES["faculty_image"]['name'])
                            {
                                if($check == "on")
                                {
                                    unlink("upload_img_testemonials/$p_image");
                                    move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload_img_testemonials/".$upload_time.'-'.$_FILES["faculty_image"]["name"]);
                                    
                                    $query = "UPDATE t_data SET title = '$title_current', description = '$description_current', image = '$image', has_published = 1,  updated_at = date('Y-m-d H:i:s') WHERE id = '$id'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    if($result)
                                        {
                                            $_SESSION['status'] = "Update Successfull";
                                            $_SESSION['status_code'] = "success";
                                        }

                                    include 'edit_testemonials_form.php';
                                }
                                else
                                {
                                
                                    unlink("upload_img_testemonials/$p_image");
                                    move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload_img_testemonials/".$upload_time.'-'. $_FILES["faculty_image"]["name"]);
                                    
                                    $query = "UPDATE t_data SET title = '$title_current', description = '$description_current', image = '$image', has_published = 0,  updated_at = date('Y-m-d H:i:s') WHERE id = '$id'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    if($result)
                                        {
                                            $_SESSION['status'] = "Update Successfull";
                                            $_SESSION['status_code'] = "success";
                                        }

                                    include 'edit_testemonials_form.php';
                                }
                               
                            }
                            else
                            {
                                if($check == "on")
                                {
                                    $image = $p_image;
                                    $query = "UPDATE t_data SET title = '$title_current', description = '$description_current', image = '$image', has_published = 1, updated_at = date('Y-m-d H:i:s') WHERE id = '$id'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    if($result)
                                        {
                                            $_SESSION['status'] = "Update Successfull";
                                            $_SESSION['status_code'] = "success";
                                        }

                                    include 'edit_testemonials_form.php';
                                }
                                else
                                {
                                    $image = $p_image;
                                    $query = "UPDATE t_data SET title = '$title_current', description = '$description_current', image = '$image', has_published = 0, updated_at = date('Y-m-d H:i:s') WHERE id = '$id'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    if($result)
                                        {
                                            $_SESSION['status'] = "Update Successfull";
                                            $_SESSION['status_code'] = "success";
                                        }

                                    include 'edit_testemonials_form.php'; 
                                }
                                
                            }
                    }   

                        ?>

                             
           
            </div>
                     
        </div>

    <?php

    include_once 'success_popup.php';

    ?>

    <?php

        include_once 'javascript_add_features.php';

    ?>

    <?php

    include_once 'footer.php';

    ?>