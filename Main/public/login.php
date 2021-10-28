<?php

    session_start();
    if(isset($_SESSION['username']))
    {
        header("location: features.php");
    }

?>

<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in Form</title>
        <link rel="stylesheet" href="styles.css">
        <script defer src="alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <script src="alert.js"></script>
        
    </head> 

    <?php

        include_once 'sign_log_header.php';

    ?>

    <section">

        <div class="bg-gray-200 min-h-screen grid place-content-center">
            <div class="bg-white rounded-md shadow-md p-20 my-20">

                <div class="text-center font-bold text-2xl pb-16 ">
                    <h1>Login</h1>
                </div>

                <form action="login_inc.php" name="login" id="form" method="POST">

                    <label class="font-bold block" for="address">Email:</label>
                    <input class="border-2 mb-1 border-black rounded shadow-md w-full pl-1" onkeyup="validateform()" id="email" name="email" type="email" placeholder="Email">
                            
                    <div class="h-5"><i><span id="text-email" class="font-medium text-xs"></span></i></div>

                    <label class="font-bold block" for="address">Password:</label>
                    <input class="border-2 mb-1 border-black rounded shadow-md w-full pl-1" onkeyup="validateform()" id="password" name="password" type="password" placeholder="Password">
                            
                    <div class="h-5"><i><span id="text-password" class="font-medium text-xs"></span></i></div>
                            
                    <div class="text-center bg-gray-500 w-min m-auto rounded-md px-4 py-1 text-white" id="submitdiv">
                        <input class="bg-transparent cursor-pointer" type="submit" id="submit" name="submit">
                    </div>

                    <p class="mt-4 text-sm" >Don't have an account? <a href="signup.php"> <span class="text-base font-medium"> Sign up</span> </a></p>
                        
                </form>
            </div>
                    
        </div>

    </section>
    
    <?php

    include_once 'error_popup.php';

    ?>

    <?php

    include_once 'success_popup.php';

    ?>

    <?php

        include_once 'javascript_login.php';

    ?>
            
    <?php

    include_once 'footer.php';

    ?>