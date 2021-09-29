<script>

    var gen = true;
    var country_border = true;
    var text_color_red = "#d10d0d";
    var text_color_green = "#0dd121";
           

    function validateform() {

        var submit_div = document.getElementById("submitdiv");

        var submit = document.querySelector("input[type='submit']");
        submit.disabled = true;

        var error = true;

        var gender = document.querySelector("input[type='radio']")
                
        if (gen == true) 
            {
                    
                gender.checked=true;
                gen = false;

            }
 
        var first_name = document.getElementById("first-name");

        var text_firstname = document.getElementById("text-firstname");
                   
        if (first_name.value.length==0)
           {       
                text_firstname.innerHTML = "*First name must be filled";
                text_firstname.style.color = text_color_red;

            }
       else if (first_name.value.length>0 && first_name.value.length<3) 
            {
                    
                first_name.style.borderColor=text_color_red;
                 text_firstname.innerHTML = "*First name is too small";
                 text_firstname.style.color = text_color_red;

            }
        else if(first_name.value.length>=20)
                {
                    first_name.style.borderColor=text_color_red;
                    text_firstname.innerHTML = "*First name is too Long";
                    text_firstname.style.color = text_color_red;
                }
        else if (first_name.value.length>=3 || first_name.value.length<20) 
            {
                    
                first_name.style.borderColor= text_color_green;
                text_firstname.innerHTML = "";

            }

        var last_name = document.getElementById("last-name");
        var text_lastname = document.getElementById("text-lastname");

        if (last_name.value.length==0) 
        {
                    
            text_lastname.innerHTML = "*Last name must be filled";
            text_lastname.style.color = text_color_red;

        }
        else if (last_name.value.length>0 && last_name.value.length<3) 
            {
                    
                last_name.style.borderColor= text_color_red;
                text_lastname.innerHTML = "*last name is too small";
                text_lastname.style.color = text_color_red;

            }
        else if(last_name.value.length>=20)
            {
                last_name.style.borderColor= text_color_red;
                text_lastname.innerHTML = "*Last name is too Long";
                text_lastname.style.color = text_color_red;
            }
        else if (last_name.value.length>=3 || last_name.value.length<20) 
            {
                    
                last_name.style.borderColor= text_color_green;
                text_lastname.innerHTML = "";

            }

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

                

                var address = document.getElementById("address");
                var text_address = document.getElementById("text-address");

                if (address.value.length==0) {
                    
                    address.style.borderColor="black";
                    text_address.innerHTML = "";

                }
                else if (address.value.length>0 && address.value.length<15) {
                    
                    address.style.borderColor= text_color_red;
                    text_address.innerHTML = "*Address is too small";
                    text_address.style.color = text_color_red;

                }
                else if(address.value.length>=250)
                {
                    address.style.borderColor= text_color_red;
                    text_address.innerHTML = "*Address is too Long";
                    text_address.style.color = text_color_red;
                }
                else if (address.value.length>=15 || address.value.length<250) {
                    
                    address.style.borderColor= text_color_green;
                    text_address.innerHTML = "";

                }

                var age = document.getElementById("age");
                var text_age = document.getElementById("text-age");

                if (age.value.length==0) {
                    
                    text_age.innerHTML = "*Age must be filled";
                    text_age.style.color = text_color_red;

                }
                else if (age.value<=0) {
                    
                    age.style.borderColor= text_color_red;
                    text_age.innerHTML = "*Age is not valid";
                    text_age.style.color = text_color_red;

                }
                else if(age.value>=121)
                {
                    age.style.borderColor= text_color_red;
                    text_age.innerHTML = "*Age is not valid";
                    text_age.style.color = text_color_red;
                }
                else if (age.value>=1 || age.value<121) {
                    
                    age.style.borderColor= text_color_green;
                    text_age.innerHTML = "";

                }

                var phone_number = document.getElementById("phone-number");
                var text_phone_number = document.getElementById("text-phonenumber");

                if (phone_number.value.length==0) {
                    
                    text_phone_number.innerHTML = "*Phone Number must be filled";
                    text_phone_number.style.color = text_color_red;

                }
                else if (phone_number.value.length>0 && phone_number.value.length<11) {
                    
                    phone_number.style.borderColor= text_color_red;
                    text_phone_number.innerHTML = "*Phone Number is too Small";
                    text_phone_number.style.color = text_color_red;

                }
                else if(phone_number.value.length>=21)
                {
                    phone_number.style.borderColor= text_color_red;
                    text_phone_number.innerHTML = "*Phone Number is too Large";
                    text_phone_number.style.color = text_color_red;
                }
                else if (phone_number.value.length>=11 || phone_number.value.length<21) {
                    
                    phone_number.style.borderColor= text_color_green;
                    text_phone_number.innerHTML = "";

                }

                var exp = /^[A-Za-z0-9+\s]*$/;
                var result = exp.test(phone_number.value);

                if (!result) {

                    phone_number.style.borderColor= text_color_red;
                    text_phone_number.innerHTML = "*Phone Number is not Alpha Numeric";
                    text_phone_number.style.color = text_color_red;

                }

                var space = /\s/;
                var result1 = space.test(phone_number.value);

                if (result1) {

                    phone_number.style.borderColor= text_color_red;
                    text_phone_number.innerHTML = "*Remove Space";
                    text_phone_number.style.color = text_color_red;

                }

                var country = document.getElementById("country");
                var text_country = document.getElementById("text-country");

                if (country.value == "0") {

                    if(country_border == true)
                    {

                        text_country.innerHTML = "*Country must be filled";
                        text_country.style.color = text_color_red;
                        

                    }
                    else
                    {

                        country.style.borderColor = text_color_red;
                        text_country.style.color = text_color_red;

                    }
                
                }
                else
                {
                    country.style.borderColor= text_color_green;
                    text_country.innerHTML = "";
                    country_border = false;
                    
                }

                if(
                    (address.value.length==0 
                    || (address.value.length>=15 && address.value.length<=250))
                    && first_name.value.length <=20
                    && first_name.value.length >=3
                    && last_name.value.length <=20
                    && last_name.value.length >=3
                    && email.value.length>=14
                    && email.value.length<=30
                    // && result2 ==1
                    && password.value.length>=9
                    && password.value.length<=20
                    && age.value >=1
                    && age.value <=120
                    && phone_number.value.length >=11
                    && phone_number.value.length <=20
                    && result1 != 1
                    && result ==1
                    && country.value != "0"
                    ) 
                    
                    {
                        error = false;
                    }

        if(! error) 
            {
                submit.disabled = false;
            }
    
        if (submit.disabled==false)
            {
                 submit_div.style.backgroundColor = "black";
                    
            } 
        else 
            {
                submit_div.style.backgroundColor = "gray";
            }

    }
</script>