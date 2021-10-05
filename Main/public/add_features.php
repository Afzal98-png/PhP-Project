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
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    </head> 

    <?php

        include_once 'admin_header.php';

    ?>

        <div class="grid grid-cols-1 md:grid-cols-6 lg:p-1 ">

            <div class=" hidden bg-black text-white rounded-md shadow-md pt-10 m-1 md:flex md:flex-col">
                
                <div class="font-black text-lg mb-12 mt-2 self-center">
                    <h1>Computer World</h1>
                </div>

                <div class="font-bold pl-8 min-h-screen">
                    <a href="features.php"><h1>Features</h1></a>
                    <a href="testimonials.php"><h1>Testemonials</h1></a>
                </div>
            
            </div>

            

            <div class="bg-gray-200 rounded-md shadow-md col-span-5 mx-1 my-1 p-12 grid">


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
                            <input class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-2" name="title" type="text" placeholder="Enter Title">

                            <label class="font-bold">Description</label>
                            <textarea class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-2" name="description" placeholder="Enter Description"></textarea>

                            <label class="font-bold">Image</label>
                            <input class="border-2 border-black rounded-md shadow-md px-1 py-1 block mb-2" type="file" name="faculty_image" id="faculty_image">

                            <div >
                             <button class="font-bold bg-black text-white px-2 py-1 rounded-md shadow-md" name="submit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            
        </div>

    <?php

    include_once 'footer.php';

    ?>