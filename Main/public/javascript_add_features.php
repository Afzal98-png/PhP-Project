<script>

    var text_color_red = "#d10d0d";
    var text_color_green = "#0dd121";
    var i = true;
           
    function validateform() {

        var submit_btn = document.getElementById("submit_btn");
        submit_btn.disabled = true;

        var error = true;

        var title = document.getElementById("title");
        var text_title = document.getElementById("text-title");

            if (title.value.length==0) 
                {
                    
                    text_title.innerHTML = "*Title must be filled";
                    text_title.style.color = text_color_red;

                }
            else if (title.value.length>0 && title.value.length<3) 
                {
                    
                    title.style.borderColor= text_color_red;
                    text_title.innerHTML = "*Title is too small";
                    text_title.style.color = text_color_red;

                }
            else if(title.value.length>=10)
                {
                    title.style.borderColor= text_color_red;
                    text_title.innerHTML = "*Title is too Long";
                    text_title.style.color = text_color_red;
                }
            else if (title.value.length>=3 || title.value.length<10) 
                {
                    
                    title.style.borderColor= text_color_green;
                    text_title.innerHTML = "";

                }                

            var description = document.getElementById("description");
            var text_description = document.getElementById("text-description");

                if (description.value.length==0) {
                    
                    text_description.innerHTML = "*Description must be filled";
                    text_description.style.color = text_color_red;

                }
                else if (description.value.length>0 && description.value.length<20) {
                    
                    description.style.borderColor= text_color_red;
                    text_description.innerHTML = "*Description is too small";
                    text_description.style.color = text_color_red;

                }
                else if(description.value.length>=1000)
                {

                    description.style.borderColor= text_color_red;
                    text_description.innerHTML = "*Description is too Long";
                    text_description.style.color = text_color_red;

                }
                else if (description.value.length>=20 || description.value.length<1000) 
                {
                    
                    description.style.borderColor= text_color_green;
                    text_description.innerHTML = "";

                }

               if
                (
                   title.value.length>=3
                   && title.value.length<=10
                   && description.value.length>=20
                   && description.value.length<=1000
                )
               {
                   error = false;
               }

               if(!error) 
                {
                    submit_btn.disabled = false;
                }
        
                if(submit_btn.disabled==false)
                    {
                        submit_btn.style.backgroundColor = "black";
                            
                    } 
                else 
                    {
                        submit_btn.style.backgroundColor = "gray";
                    }

    }
</script>