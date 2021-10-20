<Script>

        <?php

            if(isset($_SESSION['status']))
            {
                ?>
                    swal({
                        title: "<?php echo $_SESSION['status'] ?>",
                        // text: "You clicked the button!",
                        icon: "<?php echo $_SESSION['status_code'] ?>",
                        button: "OK Done!",
                        });
                <?php 

                unset($_SESSION['status']); 
            }

        ?>
         
    </Script>