    <body class="bg-gray-200">

        <main x-data="{ open : false }">

            <div class="bg-black flex p-5 md:p-0 flex justify-between items-center">
                <div class="bg-transparent cursor-pointer transform scale-150 pl-2 md:hidden">
                    <button class="menu-bar-btn" @click="open = !open" @click.away="open = false">
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <div class="m-auto pl-10 md:pr-96 md:m-0 ">
                    <img src="images/logo.svg" alt="logo image">
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
                                <a href="features.php"> <?php echo $_SESSION['username'] ?> </a>                              
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="bg-black absolute w-screen text-white font-medium pl-7 pb-5 text-lg md:hidden" x-show="open">
                <nav>
                    <ul>
                        <li class="cursor-pointer mb-1">
                            <a href="index.php"><h1>Home</h1></a>
                        </li>
                        <li class="cursor-pointer mb-1">
                            <h1>Contacts</h1>
                        </li>
                        <li class="pr-5 cursor-pointer text-white">
                            <a href="features.php"> <?php echo $_SESSION['username'] ?> </a>                              
                        </li>
                    </ul>
                </nav>
            </div>

        </main>