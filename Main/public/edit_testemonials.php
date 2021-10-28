<?php

    session_start();
    if(!(isset($_SESSION['username'])))
    {
        header("location: login.php");
    }

    include_once 'functions.php';

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
                        Edit Testemonials
                    </div>

                    <div class="justify-self-end">
                        <button class="bg-black text-white text-lg rounded-md shadow-md px-2 py-1 font-bold">
                            <a href="testemonials.php">Show All</a></button>
                    </div>
                </div>

                <?php

                    if(isset($_POST['edit_btn']))
                    {
                        $id = $_POST['edit_data'];
                        select_f_database("t_data", $id);    
                    }        
                    else if(isset($_POST['update_btn']))
                    {
                        $id = $_POST['id'];
                        $title_current = $_POST['title'];
                        $description_current = $_POST['description'];
                        $upload_time = time();
                        $image = $upload_time.'-'.$_FILES["faculty_image"]['name'];
                        $p_image = $_POST['previous_image'];
                        $image_path = "testemonials_images";
                        
                        if(isset($_POST['checkbox']))
                        {
                            $check = "on";
                        }
                        else
                        {
                            $check = "off";
                        }
                        
                        if($_FILES["faculty_image"]['name'])
                            {
                                if($check == "on")
                                {
                                    unlink("$image_path/$p_image");
                                    image_upload($upload_time, "$image_path");

                                    $column = array('title' => $title_current, 'description' => $description_current, 'image' => $image, 'has_published' => "1");
                                    update_database("t_data", $column ,$id, $image_path, $check);
                                }
                                else
                                {
                                    unlink("$image_path/$p_image");
                                    image_upload($upload_time, "$image_path");

                                    $column = array('title' => $title_current, 'description' => $description_current, 'image' => $image, 'has_published' => "0");
                                    update_database("t_data", $column ,$id, $image_path, $check);
                                }
                               
                            }
                            else
                            {
                                if($check == "on")
                                {
                                    $image = $p_image;

                                    $column = array('title' => $title_current, 'description' => $description_current, 'image' => $image, 'has_published' => "1");
                                    update_database("t_data", $column ,$id, $image_path, $check);
                                }
                                else
                                {
                                    $image = $p_image;

                                    $column = array('title' => $title_current, 'description' => $description_current, 'image' => $image, 'has_published' => "0");
                                    update_database("t_data", $column ,$id, $image_path, $check);
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