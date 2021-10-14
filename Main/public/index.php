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
        <title>PHP Project</title>
        <link rel="stylesheet" href="styles.css">
        <script defer src="alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    </head> 

    <?php

        include_once 'header.php';

    ?>

        <div class="shadow-md">
            <img  src="images/banner.jpg" alt="banner">
        </div>

        <?php
            
            require_once 'dbh_inc.php';

            $query = "SELECT * FROM features_data";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $row = mysqli_num_rows($result);
            

            if($row > 0)
            {
                ?>

                <section class="">

                    <div class="bg-white shadow-md my-2 font-bold text-center text-2xl py-12">
                        <h1>Features</h1>
                    </div>

                    <div class="bg-gray-200 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                        <?php
                        
                            while($resultval = mysqli_fetch_assoc($result))
                            {
                                if($resultval['has_published'])
                                {

                                    ?>

                                    <div class="bg-white rounded-md shadow-md m-0.5 p-10 grid grid-cols-1 justify-items-center">

                                        <div class="mb-4">

                                            <img class="w-36 h-36 " src="upload/<?php echo $resultval['image'] ?>">     

                                        </div>

                                        <div class="w-80">

                                            <div class="text-2xl font-bold mb-1">
                                                <?php echo $resultval['title'] ?>
                                            </div>
                                            <div class="text-gray-500">
                                                <?php echo substr($resultval['description'], 0, 110) ?>
                                            </div>
    
                                        </div>

                                    </div>

                                

                                    <?php
                                    
                                }
                                
                            }
                        ?>

                    </div>

                </section>

                <?php

            }


        ?>

        

<?php
            
            require_once 'dbh_inc.php';

            $query = "SELECT * FROM t_data";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $row = mysqli_num_rows($result);
            

            if($row > 0)
            {
                ?>

                <section class="">

                    <div class="bg-white shadow-md my-2 font-bold text-center text-2xl py-12">
                        <h1>Testemonials</h1>
                    </div>

                    <div class="bg-gray-200 grid grid-cols-1 overflow-y-auto h-80 mb-2">

                        <?php
                        
                            while($resultval = mysqli_fetch_assoc($result))
                            {
                                ?>

                                <div class="bg-white rounded-md shadow-md m-0.5 p-10 grid grid-cols-1 justify-items-center">

                                    <div class="mb-4">

                                        <img class="w-36 h-36 " src="upload/<?php echo $resultval['image'] ?>">     

                                    </div>

                                    <div class="w-80">

                                            <div class="text-2xl font-bold mb-1">
                                                <?php echo $resultval['title'] ?>
                                            </div>
                                            <div class="text-gray-500">
                                                <?php echo substr($resultval['description'], 0, 110) ?>
                                            </div>
    
                                        </div>

                                </div>

                                

                                <?php
                            }
                        ?>

                    </div>

                </section>

                <?php

            }


        ?>

    <?php

    include_once 'footer.php';

    ?>