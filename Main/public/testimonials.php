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
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    </head> 

    <?php

        include_once 'admin_header.php';

    ?>

        <div class="grid grid-cols-6 p-1">

            <div class="bg-white rounded-lg shadow-md pt-10 m-1 flex flex-col">
                
                <div class="font-black text-lg mb-12 mt-2 self-center">
                    <h1>Computer World</h1>
                </div>

                <div class="font-bold pl-8">
                    <a href="features.php"><h1>Features</h1></a>
                    <a href="testimonials.php"><h1>Testemonials</h1></a>
                </div>
            
            </div>

            

            <div class="bg-white rounded-md shadow-md col-span-5 ml-1 m-1">
                <section class="">

                    <div class="font-bold text-center text-2xl pb-24 mt-28">
                        <h1>Features</h1>
                    </div>

                    <div class="px-24 lg:flex justify-around px-0">
                        <div class="md:flex justify-around lg:pr-1">
                            <div class="pb-20 md:pr-10 lg:pr-20 pt-8">
                                <img class="pb-7 pl-5 lg:" src="images/laptop2.jfif" alt="laptop image">
                                <h1 class="text-2xl font-bold pb-5 md:pt-1 lg:pt-1 ">Laptop</h1>
                                <p class="text-gray-500 w-80 " >IPhone, a multipurpose handheld computing device combining
                                    mobile telephone, digital camera, music player, and personal
                                    computing technologies.
                                </p>
                            </div>

                            <div class="pb-20 lg:pr-10 pt-3">
                                <img class= "pb-7 pl-5" src="images/iphone.jfif" alt="phone image">
                                <h1 class="text-2xl font-bold pb-5">Iphone</h1>
                                <p class="text-gray-500 w-80">IPhone, a multipurpose handheld computing device combining
                                    mobile telephone, digital camera, music player, and personal
                                    computing technologies.
                                </p>
                            </div>
                        </div>

                        <div class="md:flex justify-center">
                            <div class="lg:"> 
                                <img class= "pb-7 pl-5" src="images/tablet.jfif" alt="tablet image">
                                <h1 class="text-2xl font-bold pb-5">Tablet</h1>
                                <p class="text-gray-500 w-80">IPhone, a multipurpose handheld computing device combining
                                    mobile telephone, digital camera, music player, and personal
                                    computing technologies.
                                </p>
                            </div>
                        </div>
                    </div>

                    </section>

                    <section class="mb-28 mt-10">

                    <div class="pb-20 font-bold text-center text-2xl pb-20">
                        <h1>Testimenials</h1>
                    </div>

                    <div class="px-24 overflow-y-auto h-2/3 md: lg:px-80">
                        <div class="pb-20">
                            <div class="">
                                <img  src="images/watch.jfif" alt="watch pic">
                            </div>
                            <div class="">
                                <h1 class="text-2xl font-bold pb-5">Watch</h1>
                                <p class="text-gray-500">IPhone, a multipurpose handheld computing device combining
                                    mobile telephone, digital camera, music player, and personal
                                    computing technologies.
                                </p>
                            </div>
                        </div>

                        <div class="mb-24">
                            <div class="relative left-12 pb-5">
                                <img src="images/mic.jfif" alt="mic pic">
                            </div>
                            <div class="">
                                <h1 class="text-2xl font-bold pb-5">Mic</h1>
                                <p class="text-gray-500">IPhone, a multipurpose handheld computing device combining
                                    mobile telephone, digital camera, music player, and personal
                                    computing technologies.
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="pb-7">
                                <img src="images/keyboard.jfif" alt="keyboard pic">
                            </div>
                            <div class="relative right-0.5">
                                <h1 class="text-2xl font-bold pb-5">keyboard</h1>
                                <p class="text-gray-500">IPhone, a multipurpose handheld computing device combining
                                    mobile telephone, digital camera, music player, and personal
                                    computing technologies.
                                </p>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

           

        </div>

    <?php

    include_once 'footer.php';

    ?>