    <!-- header section start -->
    <section class="bg-[#EB2C29] text-white">
        <div
            class="flex justify-between items-center text-sm lg:text-base px-5 md:px-10 lg:px-0 lg:w-10/12 mx-auto py-1">
            <marquee>
                লাইফ লাইন - ব্লাড ডোনেশন ওয়েবসাইটে আপনাকে স্বাগতম । রক্তদান একটি মহৎ মানবসেবা ।
            </marquee>
        </div>
    </section>

    <header class=" text-white sticky top-0 z-50 backdrop-blur-mdA shadow-md">
        <div class="bg-[#B71C1C]">
            <nav class="flex justify-between items-center lg:w-10/12 mx-auto py-2 px-5 md:px-10 lg:px-0">
                <div>
                    <a href="?page=home">
                        <img src="files/image/logo.jpg" alt="site_logo"
                            class="font-medium text-3xl rounded-md w-12 h-10 bg-white"></img>
                    </a>
                </div>

                <div class="flex items-center gap-6 font-medium text-2xl xl:text-base">

                <!--
                    <div class="form-control">
                        <input type="text" placeholder="Search..."
                            class="text-black text-sm py-2 px-4 md:px-6 w-40 rounded-md md:w-auto" />
                    </div>
                !-->
                    

                    <div class="hidden xl:block">
                        <ul class="flex justify-between gap-12">
                            <li class="transform transition duration-300 hover:scale-110"><a href="?page=home">Home</a>
                            </li>
                            <li class="transform transition duration-300 hover:scale-110"><a
                                    href="?page=about">About
                                    Us</a>
                            </li>
                            <li class="transform transition duration-300 hover:scale-110"><a
                                    href="?page=search-donor">Donors List</a>
                            </li>
                            <li class="transform transition duration-300 hover:scale-110"><a
                                    href="?page=register">Register</a>
                            </li>
                            <?php
                            if (!isset($_SESSION["email"]) && !isset($_SESSION["pass"])){
                                echo <<<EOT
                                <li class="transform transition duration-300 hover:scale-110"><a
                                href="?page=login-page">Login</a>
                                </li>
                                EOT;
                            }
                            if (isset($_SESSION["email"]) && isset($_SESSION["pass"])){
                                echo <<<EOT
                                <li class="transform transition duration-300 hover:scale-110">
                                <a href="files/php/admin-panel.php">Dashboard</a>
                                </li>
                                EOT;
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="dropdown dropdown-end xl:hidden">
                        <div tabindex="0" role="button"><i class="fa-solid fa-bars"></i></div>
                        <ul tabindex="0" class="dropdown-content bg-red-600 menu rounded-box z-[1] w-52 p-2 shadow">
                            <li><a href="?page=home">Home</a></li>
                            <li><a href="?page=about">About Us</a></li>
                            <li><a href="?page=search-donor">Donors List</a></li>
                            <li><a href="?page=register">Register</a></li>
                            <?php
                            if (!isset($_SESSION["email"]) && !isset($_SESSION["pass"])){
                                echo <<<EOT
                                <li><a href="?page=login-page">Login</a></li>
                                EOT;
                            }
                            if (isset($_SESSION["email"]) && isset($_SESSION["pass"])){
                                echo <<<EOT
                                <li><a href="files/php/admin-panel.php">Dashboard</a></li>
                                EOT;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <!-- header section end -->