<script>

    var text_color_red = "#d10d0d";
    var text_color_green = "#0dd121";
           

    function validateform() {

        var submit_div = document.getElementById("submitdiv");

        var submit = document.querySelector("input[type='submit']");
        submit.disabled = true;

        var error = true;

       

        var email = document.getElementById("email");
        var text_email = document.getElementById("text-email");

            if (email.value.length==0) 
                {
                    
                    text_email.innerHTML = "*Email must be filled";
                    text_email.style.color = text_color_red;

                }
            else if (email.value.length>0 && email.value.length<14) 
                {
                    
                    email.style.borderColor= text_color_red;
                    text_email.innerHTML = "*Email is too small";
                    text_email.style.color = text_color_red;

                }
            else if(email.value.length>=30)
                {
                    email.style.borderColor= text_color_red;
                    text_email.innerHTML = "*Email is too Long";
                    text_email.style.color = text_color_red;
                }
            else if (email.value.length>=14 || email.value.length<30) 
                {
                    
                    email.style.borderColor= text_color_green;
                    text_email.innerHTML = "";

                }

                // var at_the_rate = /^[0-9@\s]*$/;
                // var result2 = at_the_rate.test(email.value);

                // if (!result2) {

                //     email.style.borderColor= text_color_red;
                //     text_email.innerHTML = "*Plx Include @ in email";
                //     text_email.style.color = text_color_red;

                // }

            var password = document.getElementById("password");
            var text_password = document.getElementById("text-password");

                if (password.value.length==0) {
                    
                    text_password.innerHTML = "*Password must be filled";
                    text_password.style.color = text_color_red;

                }
                else if (password.value.length>0 && password.value.length<9) {
                    
                    password.style.borderColor= text_color_red;
                    text_password.innerHTML = "*Password is too small";
                    text_password.style.color = text_color_red;

                }
                else if(password.value.length>=20)
                {

                    password.style.borderColor= text_color_red;
                    text_password.innerHTML = "*Password is too Long";
                    text_password.style.color = text_color_red;

                }
                else if (password.value.length>=9|| password.value.length<20) 
                {
                    
                    password.style.borderColor= text_color_green;
                    text_password.innerHTML = "";

                }

                

               if(
                   email.value.length>=14
                   && email.value.length<=30
                   && password.value.length>=9
                   && password.value.length<=20
               )
               {
                   error = false;
               }

               if(! error) 
                {
                    submit.disabled = false;
                }
        
                if(submit.disabled==false)
                    {
                        submit_div.style.backgroundColor = "black";
                            
                    } 
                else 
                    {
                        submit_div.style.backgroundColor = "gray";
                    }

    }
</script>