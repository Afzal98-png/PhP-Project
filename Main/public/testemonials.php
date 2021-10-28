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
        <title>Testemonials</title>
        <link rel="stylesheet" href="styles.css">
        <script defer src="alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <script src="alert.js"></script>
        
    </head> 

    <?php

        include_once 'admin_header.php';

    ?>

        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6">

            <div class="hidden bg-black text-white rounded-md shahdow-md pt-10 m-1 md:flex md:flex-col">
                
                <div class="font-black text-lg mb-12 mt-2 self-center">
                    <h1>Computer World</h1>
                </div>

                <div class="font-bold pl-8 min-h-screen">
                    <a href="features.php"><h1>Features</h1></a>
                    <a href="testemonials.php"><h1>Testemonials</h1></a>
                </div>
            
            </div>

            <div class="bg-gray-200 rounded-md shahdow-md mx-1 my-1 p-12  md:col-span-3 lg:col-span-5">

                <div class="grid grid-cols-2">
                    <div class="font-bold text-lg">
                        Manage Testemonials
                    </div>

                    <div class="justify-self-end">
                        <button class="bg-black text-white text-lg rounded-md shadow-md px-2 py-1 font-bold"><a href="add_testemonials.php">Add Testemonials</a></button>
                    </div>
                </div>

                <div>

                    <?php

                        require_once 'dbh_inc.php';
                        $query = "SELECT * FROM t_data";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        $row = mysqli_num_rows($result);
                        
                        if($row > 0)
                        {
                            ?>

                            <table class="border-2 border-white my-28 w-full">
                                <thead>
                                    <tr class="border-2 border-gray-800 bg-black text-white">
                                        <th class="p-2">S.No</th>
                                        <th class="p-2">Title</th>
                                        <th class="p-2">Description</th>
                                        <th class="p-2">Image</th>
                                        <th class="p-2">Published</th>
                                        <th class="p-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1;
                                        while($rowvalue = mysqli_fetch_assoc($result))
                                        {
                                            
                                            ?>

                                            <tr class="">
                                                <td class="border-2 border-gray-300 text-center p-1 w-1 bg-white ">
                                                    <?php echo $i ?></td>
                                                <td class="border-2 border-gray-300 text-center p-1 w-1 bg-white">
                                                    <?php echo $rowvalue['title'] ?></td>
                                                <td class="border-2 border-gray-300 p-1 bg-white w-80 ">
                                                    <?php echo substr($rowvalue['description'], 0, 110) ?></td>
                                                <div class="grid">
                                                    <td class="border-2 border-gray-300 w-1 p-4 bg-white"> 
                                                    <?php echo '<img src="testemonials_images/'.$rowvalue['image'].'" alt="">'?></td>
                                                <?php

                                                    if($rowvalue['has_published'])
                                                    {
                                                        ?>
                                                         <td class="border-2 border-gray-300 text-center p-1 lg:w-20 bg-white">
                                                             Published</td>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                         <td class="border-2 border-gray-300 text-center p-1 lg:w-20 bg-white">
                                                             Not Published</td>
                                                        <?php
                                                    }

                                                ?> 
                                                <td class="border-2 border-gray-300 text-center p-2 bg-white lg:w-24">
                                                    <div class="lg:grid lg:grid-cols-2 lg:pr-2 lg:pt-4">
                                                        <form action="edit_testemonials.php" method="post">
                                                            <button class="bg-black text-white rounded-md shadow-md px-2 py-2 font-bold"
                                                             name="edit_btn" type="submit">Edit</button>
                                                            <input type="hidden" name="edit_data" value="
                                                            <?php echo $rowvalue['id']; ?>">
                                                        </form>
                                                        <form action="delete_testemonials.php" method="post">
                                                            <input type="hidden" name="delete_btn" value="
                                                            <?php echo $rowvalue['id']; ?>">
                                                            <input type="hidden" name="delete_image" value="<?php echo $rowvalue['image']; ?>">
                                                            <button class="bg-black text-white rounded-md shadow-md px-2 py-2 font-bold" 
                                                            name="delete" type="submit">Delete</button>
                                                        </form> 
                                                    </div>
                                                
                                                </td>
                                                
                                            </tr> 

                                            <?php   
                                            $i++;     
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                            <?php
                        }
                        else
                        {
                            ?>

                            <div class="flex place-content-center my-28">
                                <div class="bg-white rounded-md shadow-md p-20 text-lg font-bold">

                                    <div class="w-40">

                                    <?php
                                        echo "No Record Found"
                                    ?>

                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            <?php

                        }

                            ?>   
                </div>
            </div>
        </div>
    <?php

    include_once 'success_popup.php';

    ?>

    <?php

    include_once 'footer.php';

    ?>