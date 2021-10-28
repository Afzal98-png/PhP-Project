<?php

    function edit_form($id, $column, $image_path, $check)
    {
        ?>
        <div class="min-h-screen grid place-content-center">
                                        
            <div class="bg-white text-black rounded-md shadow-md px-12 py-20 my-20">

                <form action="" name="edit_form" id="edit_features_form" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo "$id" ?>" >

                    <label class="font-bold" >Title</label>
                    <input class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="title"
                    onkeyup="validateform()" value="<?php echo $column['title'] ?>" name="title" type="text" placeholder="Enter Title">

                    <div class="h-5"><i><span id="text-title" class="font-medium text-xs"></span></i></div>

                    <label class="font-bold">Description</label>
                    <input type="text"class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="description" 
                    onkeyup="validateform()" value="<?php echo $column['description'] ?>" name="description" type="text" 
                    placeholder="Enter Description">

                    <div class="h-5"><i><span id="text-description" class="font-medium text-xs"></span></i></div>

                    <label class="font-bold">Image</label>
                    <input class="border-2 border-black rounded-md shadow-md px-1 py-1 block mb-1" id="image" oninput="validateform()" 
                    value="<?php echo $column['image'] ?>" type="file" name="faculty_image" id="faculty_image">

                    <div class="w-28 h-28 my-2">
                                            
                        <img class="" src="<?php echo "$image_path" ?>/<?php echo $column['image'] ?>" alt="edit_image">

                    </div>

                    <input type="hidden" name="previous_image" value="<?php echo $column['image'] ?>" >

                    <input class="" type="checkbox" name="checkbox"
                        <?php 
                        if($check == "on")
                            {
                                ?>
                                checked
                                <?php
                            }
                            else
                            {
                                            
                            } ?>>
                    <label class="text-sm font-bold pl-1">Publish</label>
                                        
                                        
                        <div class="mt-2">
                            <button class="font-bold bg-black text-white px-2 py-1 rounded-md shadow-md" id="submit_btn" 
                            type="submit" name="update_btn">Update</button>
                        </div>

                </form>
            </div>
        </div>

        <?php
    }

    function image_upload($upload_time, $image_path)
    {
        move_uploaded_file($_FILES["faculty_image"]["tmp_name"], 
        "$image_path/".$upload_time.'-'.$_FILES["faculty_image"]["name"]);
    }

    function add_database($table_name, $title, $description, $image, 
    $publish_status, $upload_time, $image_path, $success_path, $error_path)
    {
        include_once 'dbh_inc.php';

        $query = "INSERT INTO $table_name
        (title, description, image, has_published)
        values('$title', '$description', '$image', $publish_status)";
        
        $result= mysqli_query($conn, $query) or die(mysqli_error($conn));
            
        if($result)
        {   
            image_upload($upload_time, $image_path);

            $_SESSION['status'] = "Added Successfull";
            $_SESSION['status_code'] = "success";

            header("location: $success_path");
        }
        else
        {
            header("location: $error_path");
        }
    }

    // function insert_database($table_name, $column, $upload_time, $image_path, $success_path, $error_path)
    // {
    //     include 'dbh_inc.php';
    //     // var_dump($column);
    //     //     exit;
    //     foreach($column as $key => $value)
    //     {   
    //         $query = "INSERT INTO $table_name ($key) values('$value')";
    //         $result = mysqli_query($conn, $query) or die(mysqli_error($conn));  
    //     }
        

    //     if($result)
    //     {   
    //         image_upload($upload_time, $image_path);

    //         $_SESSION['status'] = "Added Successfull";
    //         $_SESSION['status_code'] = "success";

    //         header("location: $success_path");
    //     }
    //     else
    //     {
    //         header("location: $error_path");
    //     }
    // }



    // [ ['title' => 'any title', 'age' => 23]];
    function update_database($table_name, $column, $id,  $image_path, $check)
    {
        include 'dbh_inc.php';

        foreach($column as $key => $value)
        {
            $query = "UPDATE $table_name SET $key = '$value',
            updated_at = date('Y-m-d H:i:s') WHERE id = '$id'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
        }

        edit_form($id, $column, $image_path, $check);
                         
        if($result)
        {
            $_SESSION['status'] = "Update Successfull";
            $_SESSION['status_code'] = "success";
        }
    }

    function select_f_database($table_name, $id)
    {
        include 'dbh_inc.php';
        $query = "SELECT * FROM $table_name WHERE id = '$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $row = mysqli_num_rows($result);

        edit_form_zero($row, $result);
    }

    function edit_form_zero($row, $result)
    {
        if($row > 0)
        {
            $rowvalue = mysqli_fetch_assoc($result);

            ?>
                <div class="min-h-screen grid place-content-center">
                                        
                    <div class="bg-white text-black rounded-md shadow-md px-12 py-20 my-20">

                        <form action="" name="edit_form" id="edit_features_form" method="post" 
                            enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $rowvalue['id'] ?>" >

                            <label class="font-bold" >Title</label>
                            <input class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" 
                            id="title" onkeyup="validateform()" value="<?php echo $rowvalue['title'] ?>" name="title" 
                                type="text" placeholder="Enter Title">

                            <div class="h-5"><i><span id="text-title" class="font-medium text-xs"></span></i></div>

                            <label class="font-bold">Description</label>
                            <input type="text"class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" 
                                id="description" onkeyup="validateform()" value="<?php echo $rowvalue['description'] ?>" 
                                name="description" type="text" placeholder="Enter Description">

                            <div class="h-5"><i><span id="text-description" class="font-medium text-xs"></span></i></div>

                            <label class="font-bold">Image</label>
                            <input class="border-2 border-black rounded-md shadow-md px-1 py-1 block mb-1" id="image" 
                                oninput="validateform()" value="" type="file" name="faculty_image" id="faculty_image">

                            <img class="w-20 h-20 mb-4" src="features_images/<?php echo $rowvalue['image'] ?> 
                                "alt="current image">
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
                                <button class="font-bold bg-black text-white px-2 py-1 rounded-md shadow-md" 
                                id="submit_btn" type="submit" name="update_btn">Update</button>
                            </div>

                        </form>

                    </div>
                </div>

            <?php

        }
    }

    function delete_data($table_name, $id, $image_path, $image, $next_path)
    {
        include 'dbh_inc.php';
        $query = "DELETE FROM $table_name WHERE id='$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($result)
        {
            unlink("$image_path/$image");
            $_SESSION['status'] = "Delete Successfull";
            $_SESSION['status_code'] = "success";
            header("location: $next_path");
        }
        else
        {
            header("location: $next_path");
        }
    }
?>
    