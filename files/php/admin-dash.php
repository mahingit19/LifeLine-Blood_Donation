
                    <div class="gap-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-between px-4 py-8">


                    <?php
                    if ($user_type == "user"){
                        echo <<<EOT
                        <a href="?page=admin-donor-list">
                            <div
                                class="bg-white rounded-lg p-4 flex justify-between items-center shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 hover:bg-violet-50">
                                <div>
                                    <h1 class="text-lg font-semibold">Total Donors</h1>
                                    <p class="text-[#1E3A8A] text-3xl font-semibold mt-2">$donor_num_rows</p>
                                </div>
                                <div>
                                    <img src="../image/office-man.png" alt="user_icon" class="w-14 h-12">
                                </div>
                            </div>
                        </a>
                        <a href="?page=admin-donation-list">
                            <div
                                class="bg-white rounded-lg p-4 flex justify-between items-center shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 hover:bg-blue-50">
                                <div>
                                    <h1 class="text-lg font-semibold">Total Donations</h1>
                                    <p class="text-[#1E3A8A] text-3xl font-semibold mt-2">$donation_num_rows</p>
                                </div>
                                <div>
                                    <img src="../image/office-man.png" alt="user_icon" class="w-14 h-12">
                                </div>
                            </div>
                        </a>

                        <a href="?page=admin-approve">
                            <div
                                class="bg-white rounded-lg p-4 flex justify-between items-center shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 hover:bg-yellow-50">
                                <div>
                                    <h1 class="text-lg font-semibold">Approvals</h1>
                                    <p class="text-[orange] text-3xl font-semibold mt-2">$approval_donor_num_rows</p>
                                </div>
                                <div>
                                    <img src="../image/office-man.png" alt="user_icon" class="w-14 h-12">
                                </div>
                            </div>
                        </a>

                        <a href="?page=admin-user-list">
                            <div
                                class="bg-white rounded-lg p-4 flex justify-between items-center shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 hover:bg-orange-50">
                                <div>
                                    <h1 class="text-lg font-semibold">Total Users</h1>
                                    <p class="text-[#1E3A8A] text-3xl font-semibold mt-2">$user_num_rows</p>
                                </div>
                                <div>
                                    <img src="../image/office-man.png" alt="user_icon" class="w-14 h-12">
                                </div>
                            </div>
                        </a>
                        EOT;
                    }
                    else if ($user_type = "donor"){
                        echo <<<EOT
                        <a href="?page=admin-profile">
                            <div
                                class="bg-white rounded-lg p-4 flex justify-between items-center shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 hover:bg-blue-50">
                                <div>
                                    <h1 class="text-lg font-semibold">Your Profile</h1>
                                    <p class="text-[#1E3A8A] text-3xl font-semibold mt-2">$donation_num_rows</p>
                                </div>
                                <div>
                                    <img src="../image/office-man.png" alt="user_icon" class="w-14 h-12">
                                </div>
                            </div>
                        </a>
                        <a href="user-list.html">
                            <div
                                class="bg-white rounded-lg p-4 flex justify-between items-center shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105 hover:bg-blue-50">
                                <div>
                                    <h1 class="text-lg font-semibold">Total Donations</h1>
                                    <p class="text-[#1E3A8A] text-3xl font-semibold mt-2">$donation_num_rows</p>
                                </div>
                                <div>
                                    <img src="../image/office-man.png" alt="user_icon" class="w-14 h-12">
                                </div>
                            </div>
                        </a>
                        EOT;
                    }
                    ?>
                        

                        
                    </div>
                </section>
            </header>
        </section>
    </div>
    <!-- header large device section end -->