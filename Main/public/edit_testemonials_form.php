<div class="min-h-screen grid place-content-center">
                                        
                                <div class="bg-white text-black rounded-md shadow-md px-12 py-20 my-20">

                                    <form action="" name="edit_form" id="edit_features_form" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?php echo "$id" ?>" >

                                        <label class="font-bold" >Title</label>
                                        <input class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="title" onkeyup="validateform()" value="<?php echo "$title_current" ?>" name="title" type="text" placeholder="Enter Title">

                                        <div class="h-5"><i><span id="text-title" class="font-medium text-xs"></span></i></div>

                                        <label class="font-bold">Description</label>
                                        <input type="text"class="border-2 border-black rounded-md shadow-md px-1 block min-w-full mb-1" id="description" onkeyup="validateform()" value="<?php echo "$description_current" ?>" name="description" type="text" placeholder="Enter Description">

                                        <div class="h-5"><i><span id="text-description" class="font-medium text-xs"></span></i></div>

                                        <label class="font-bold">Image</label>
                                        <input class="border-2 border-black rounded-md shadow-md px-1 py-1 block mb-1" id="image" oninput="validateform()" value="<?php echo "$image" ?>" type="file" name="faculty_image" id="faculty_image">

                                        <div class="w-28 h-28 my-2">
                                            
                                            <img class="" src="upload/<?php echo "$image" ?>" alt="edit_image">

                                        </div>
                                        <input type="hidden" name="previous_image" value="<?php echo $image ?>" >

                                        <input class="" type="checkbox" name="checkbox"
                                        <?php if($check == "on")
                                        {
                                            ?>
                                            checked
                                            <?php
                                        }
                                        else
                                        {
                                            
                                        } ?>>
                                        <label class="text-sm font-bold pl-1">Publish</label>
                                        
                                        
                                        <div class="mt-2">
                                            <button class="font-bold bg-black text-white px-2 py-1 rounded-md shadow-md" id="submit_btn" type="submit" name="update_btn">Update</button>
                                        </div>

                                    </form>

                                </div>
                        </div>