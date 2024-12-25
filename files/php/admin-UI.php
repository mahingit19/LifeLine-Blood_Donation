<!-- header small device section start -->


<section class="bg-[#EB2C29] text-white">
        <div class="flex justify-between items-center px-5 md:px-10 lg:px-0 mx-auto py-1">
            <marquee class="text-sm lg:text-base">
                লাইফ লাইন - ব্লাড ডোনেশন ওয়েবসাইটের এডমিন ড্যাশবোর্ডে
                আপনাকে স্বাগতম । রক্তদান একটি মহৎ মানবসেবা ।
            </marquee>
        </div>
    </section>

    <header class="lg:hidden text-white sticky top-0 z-50 backdrop-blur-md">
        <div class="bg-[#B71C1C] pb-2">
            <nav class="flex justify-between items-center lg:w-10/12 mx-auto py-2 px-5 md:px-10 lg:px-0 ">
                <div class="mr-2">
                    <a href="../../index.php" target="_blank">
                        <img src="../image/logo.jpg" alt="site_logo"
                            class="font-medium text-3xl rounded-md w-12 h-10 bg-white">
                    </a>
                </div>

                <div class="flex items-center gap-2 font-medium text-2xl xl:text-base">
                    <div class="form-control">
                        <input type="text" placeholder="Search..."
                            class="text-black text-sm px-4 py-2 md:px-6 w-40 rounded-md md:w-auto" />
                    </div>

                    <div class="flex items-center gap-6">
                        <a href="?page=admin-profile">
                            <?php
                            if ($session_array[$user_type.'_photo'] == "" || $session_array[$user_type.'_photo'] == "uploads/"){
                                echo <<<EOT
                                <img src="../image/user.jpg" alt="admin_profile_pic" class="h-8 w-8 rounded-full">
                                EOT;
                            }
                            else {
                                $photo = $user_type . "_photo";
                                echo <<<EOT
                                <img src="$session_array[$photo]" alt="user_profile" class="h-8 w-8 rounded-md">
                                EOT;
                            }
                            ?>
                            
                        </a>
                    </div>

                    <div class="dropdown dropdown-end xl:hidden">
                        <div tabindex="0" role="button"><i class="fa-solid fa-bars"></i></div>
                        <ul tabindex="0" class="dropdown-content bg-red-600 menu rounded-box z-[1] w-52 p-2 shadow">
                            <?php
                            if($user_type == "user" || $user_type == "donor"){
                                echo <<<EOT
                                <li><a href="?page=admin-dash">Dashboard</a></li>
                                <li><a href="?page=admin-profile">Profile</a></li>
                                EOT;
                            }
                            if($user_type == "user"){
                                echo <<<EOT
                                <li><a href="?page=admin-donor-list">Donors List</a></li>
                                <li><a href="?page=admin-add-new-donor">Add new donor</a></li>
                                <li><a href="?page=admin-approve">Approvals</a></li>
                                <li><a href="?page=admin-donation-list">Donation lists</a></li>
                                <li><a href="?page=admin-user-list">User List</a></li>
                                EOT;
                            }
                            ?>
                            <hr>
                            <li><a href="logout.php">Logout<i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <!-- header small device section end -->


    <!-- header large device section start -->
    <div>
        <section class="lg:flex">
            <div class="hidden lg:block justify-between">
                <aside class="sticky top-0 left-0 w-64 h-screen bg-blue-900 text-white flex flex-col">
                    <div class="p-4 text-2xl font-bold text-center border-b border-blue-700">
                    <span style="text-transform: capitalize;"><?php echo $user_type ?></span> Panel
                    </div>
                    <nav class="flex-1 p-4 space-y-2 text-[14px]">
                    <?php
                            if($user_type == "user" || $user_type == "donor"){
                                echo <<<EOT
                                <a href="?page=admin-dash" class="block py-2 px-4 rounded hover:bg-blue-700">Dashboard</a>
                                <hr class="opacity-30">
                                <a href="?page=admin-profile" class="block py-2 px-4 rounded hover:bg-blue-700">Profile</a>
                                <hr class="opacity-30">
                                <a href="?page=admin-donation-list" class="block py-2 px-4 rounded hover:bg-blue-700">Donation lists (table of donor
                                    donate dates)</a>
                                <hr class="opacity-30">
                                EOT;
                            }
                            if($user_type == "user"){
                                echo <<<EOT
                                <a href="?page=admin-donor-list" class="block py-2 px-4 rounded hover:bg-blue-700">Donors list (table of donors)</a>
                                <hr class="opacity-30">
                                <a href="?page=admin-add-new-donor" class="block py-2 px-4 rounded hover:bg-blue-700">Add new donor (Donor add form)</a>
                                <hr class="opacity-30">
                                <a href="?page=admin-approve" class="block py-2 px-4 rounded hover:bg-blue-700">Approvals (Table of pending
                                    donors)</a>
                                <hr class="opacity-30">
                                <a href="?page=admin-user-list" class="block py-2 px-4 rounded hover:bg-blue-700">User List (table of account
                                    users)</a>
                                <hr class="opacity-30">
                                EOT;
                            }
                            ?>
                    </nav>
                    <div class="p-4 border-t border-blue-700 text-[14px]">
                        <a href="logout.php" class="block py-2 px-4 rounded hover:bg-blue-700 text-center">Logout<i
                                class="fa-solid fa-arrow-right-from-bracket ml-3"></i></a>
                    </div>
                </aside>
            </div>

            <header class="p-4 flex-1">
                <div class="hidden lg:block sticky top-0 z-50 backdrop-blur-md">
                    <div class="sticky flex justify-between">
                        <div class="flex gap-6">
                            <a href="../../index.php" target="_blank">
                                <img src="../image/logo.jpg" alt="llbd_logo" class="w-12 h-10 rounded-md">
                            </a>
                            <div class="relative">
                                <input type="text"
                                    class="border border-gray-300 rounded-lg pl-10 pr-4 py-2 focus:outline-none focus:ring focus:ring-blue-300 bg-white"
                                    placeholder="Search...">
                                <span class="absolute left-3 top-2.5 text-gray-400">
                                    🔍
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <h1 class="font-medium"><?php echo $session_array[$user_type.'_name']; ?></h1>
                            <a href="?page=admin-profile">
                            <?php
                            if ($session_array[$user_type.'_photo'] == "" || $session_array[$user_type.'_photo'] == "uploads/"){
                                echo <<<EOT
                                <img src="../image/user.jpg" alt="admin_profile_pic" class="h-8 w-8 rounded-full">
                                EOT;
                            }
                            else {
                                $photo = $user_type . "_photo";
                                echo <<<EOT
                                <img src="$session_array[$photo]" alt="user_profile" class="h-8 w-8 rounded-md">
                                EOT;
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <section class="bg-[#F3F4F6] h-screen mt-6">
                    <h1 class="md:flex items-center gap-4 px-4 pt-4 lg:text-2xl font-semibold">Welcome To The Dashboard
                        <span>
                            <img src="../image/dashboard.gif" alt="flower_logo" class="w-10 rounded-sm">
                        </span>
                    </h1>

                    <!-- main section start -->