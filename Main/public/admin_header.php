   <body class="bg-white">

        <main x-data="{ main_nav : false, secondry_nav : false}">

            <div class="bg-black flex p-5 md:p-0 flex justify-between items-center shadow-md">
                <div class="bg-transparent cursor-pointer transform scale-150 pl-2 md:hidden">
                    <button class="" @click="main_nav = !main_nav" @click.away="main_nav = false">
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <div class="m-auto pl-10 md:pr-96 md:m-0 ">
                    <img src="images/logo.svg" alt="logo image">
                </div>

                <div class="bg-transparent cursor-pointer transform scale-150 pr-2 md:hidden">
                    <button class="" @click="secondry_nav = !secondry_nav" @click.away="secondry_nav = false">
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <div class="hidden text-white md:flex pr-10 font-medium pl-7 pb-5 text-lg pt-5">
                    <nav class="">
                        <ul class="flex"> 
                            <li class="pr-5 cursor-pointer">
                                <a href="index.php"><h1>Home</h1></a>
                            </li>
                            <li class="pr-5 cursor-pointer">
                                <h1>Contacts</h1>
                            </li>
                            <li class="pr-5 cursor-pointer text-white">
                            
                                <div @click="secondry_nav = !secondry_nav" @click.away="secondry_nav = false">
                                    <?php

                                        echo $_SESSION['username'];

                                    ?>
                                </div> 

                            </li> 
                        </ul>
                    </nav>
                    
                </div>

                

            </div>

            <div class="flex justify-end" x-show="secondry_nav" >
                
                <div class="bg-black text-white absolute p-10 rounded-bl-md w-auto h-auto">
                    <a class="cursor-pointer font-medium text-lg" href="logout.php"><h1>Logout</h1></a>
                </div>

            </div>

            <div class="bg-black absolute w-screen text-white font-medium pl-7 pb-5 rounded-b-md shadow-md text-lg md:hidden" x-show="main_nav">
                <nav>
                    <ul>
                        <li class="cursor-pointer mb-1">
                            <a href="index.php"><h1>Home</h1></a>
                        </li>
                        <li class="cursor-pointer mb-1">
                            <h1>Contacts</h1>
                        </li>
                        <li class="mb-1">
                            <a href="login.php"><h1>Login</h1></a>
                        </li>
                        <li class="mb-1">
                            <a href="signup.php"><h1>Signup</h1></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </main>