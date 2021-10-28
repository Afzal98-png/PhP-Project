<Script>

    <?php

        if(isset($_SESSION['error']))
            {
                ?>
                    swal({
                        title: "<?php echo $_SESSION['error'] ?>",
                        // text: "You clicked the button!",
                        button: "OK Done!",
                        });
                <?php 

                unset($_SESSION['status']); 
            }

    ?>
         
</Script>