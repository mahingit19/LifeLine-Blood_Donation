<!-- Profile Dashboard -->




<div class="bg-white max-w-4xl w-full mx-auto p-6 rounded-lg shadow-lg mt-16">
                        <h1 class="font-semibold text-2xl pb-6 text-center"><span style="text-transform: capitalize;"><?php echo $user_type ?></span> Profile</h1>
                        <hr class="pt-6">
                        <!-- Profile Section -->
                        <div class="flex flex-col md:flex-row items-center md:items-start">
                            <!-- Profile Image and Edit Button -->
                            <div class="relative mb-6 md:mb-0 md:mr-8">
                                <?php
                                if ($session_array[$user_type.'_photo'] == "" || $session_array[$user_type.'_photo'] == "uploads/"){
                                    echo <<<EOT
                                    <img id="profileImage"
                                    class="w-40 h-40 md:w-48 md:h-48 rounded-full border-4 border-red-500"
                                    src="../image/flower.gif" alt="Profile Photo">
                                    EOT;
                                }
                                else {
                                    $photo = $user_type . "_photo";
                                    echo <<<EOT
                                    <img src="$session_array[$photo]" alt="user_profile" class="h-40 w-40 rounded-md">
                                    EOT;
                                }
                                ?>
                                <button
                                    class="absolute bottom-2 right-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                                        class="w-6 h-6">
                                        <path
                                            d="M15.7 2.3c-.4-.4-1-.4-1.4 0l-9 9-1.3 4.6 4.6-1.3 9-9c.4-.4.4-1 0-1.4L15.7 2.3zM5.5 15l1.3-1.3L5 12.5l-1.3 1.3 1.3 1.3 1.2-.1z" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Profile Details -->
                            <div>
                                <h3 class="text-2xl font-semibold text-gray-800">
                                    <?php echo $session_array[$user_type."_name"]; ?>
                                </h3>
                                <p class="text-gray-500"><?php echo $session_array[$user_type."_location"]; ?>, Bangladesh</p>
                                <div class="mt-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600 font-medium">Blood Group:</span>
                                        <span class="text-red-500 font-semibold"><?php echo $session_array[$user_type."_blood"]; ?></span>
                                    </div>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-gray-600 font-medium">Phone:</span>
                                        <span class="text-gray-800"><?php echo $session_array[$user_type."_phone"]; ?></span>
                                    </div>
                                    <div class="flex items-center justify-between mt-2">
                                        <span class="text-gray-600 font-medium">Email:</span>
                                        <span class="text-gray-800">
                                        <?php echo $session_array[$user_type."_email"]; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact and Edit Buttons -->
                        <div class="flex justify-end mt-6">
                            <a href="?page=admin-update-form&id=<?php echo $session_array[$user_type."_id"]; ?>"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg">Edit
                                Profile</a>
                        </div>
                    </div>
