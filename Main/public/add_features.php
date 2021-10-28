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
        <title>Add Features</title>
        <link rel="stylesheet" href="styles.css">
        <script defer src="alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
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
                        Add New Features
                    </div>

                    <div class="justify-self-end">
                        <button class="bg-black text-white text-lg rounded-md shadow-md px-2 py-1 font-bold"><a href="features.php">Show All</a></button>
                    </div>
                </div>

                <div class="min-h-screen grid place-content-center">
        
                    <div class="bg-white text-black rounded-md shadow-md px-12 py-20 my-20">

                         <form action="add_features_inc.php" name="features_form" id="features_form" method="post" enctype="multipart/form-data">

                            <label class="font-bold" >Title</label>
                            <input class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="title" name="title" type="text" placeholder="Enter Title" onkeyup="validateform()">
                            
                            <div class="h-5"><i><span id="text-title" class="font-medium text-xs"></span></i></div>

                            <label class="font-bold">Description</label>
                            <textarea class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="description" name="description" placeholder="Enter Description" onkeyup="validateform()"></textarea>

                            <div class="h-5"><i><span id="text-description" class="font-medium text-xs"></span></i></div>

                            <label class="font-bold">Image</label>
                            <input class="border-2 border-black rounded-md shadow-md px-1 py-1 block mb-2" id="image" type="file" name="faculty_image" id="faculty_image" oninput="validateform()">

                            <input class="" type="checkbox" name="checkbox" checked>
                            <label class="text-sm font-bold pl-1">Publish</label>

                            <div class="mt-2" id="submitdiv">
                             <button class="font-bold bg-gray-500 text-white px-2 py-1 rounded-md shadow-md" type="submit" name="submit" id="submit_btn" >Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>            
        </div>

    <?php

        include_once 'javascript_add_features.php';

    ?>

    <?php

    include_once 'footer.php';

    ?>