<!-- main section start -->
<main>

<!-- register section start -->
<div class="bg-[#FCE0DF]">
    <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-6 ">
        <h1 class="text-2xl lg:text-4xl font-semibold">Register with LLBD</h1>
        <p class="mt-2 text-sm lg:text-base">Register with us to avail all the features.</p>
    </div>
</div>
<!-- register section end -->

<!-- register form -->
<section class="xl:mt-16 mt-8">
    <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto lg:flex items-center lg:my-24">
        <div class="bg-gray-200  lg:w-1/2 mx-auto mt-10 lg:mt-0 border px-8 py-12 rounded-md text-center">
            <?php 
                if (isset($_GET['submit'])){
                    $submit = $_GET['submit'];
                    if ($submit=='success'){
                        echo <<<EOT
                            <p class="text-green-600 font-semibold text-xl" style="background-color: rgb(226, 252, 222,0.3);border: 1px solid lightgreen; padding: 5px;">Thanks for join with us</p>
                        EOT;
                    }
                }
            ?>
            <div class="divider font-medium text-xl md:text-3xl">Create Your Profile</div>
            <p class="text-sm lg:text-base mt-8 opacity-80">Create your account. It's free and only takes a minute.</p>

            <form class="mt-8 space-y-5" action="files/php/submit.php" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm md:text-base">
                    <input type="text" placeholder="First Name *" class="px-4 py-3 border w-full rounded-md outline-none" name="fname" required>
                    <input type="text" placeholder="Last Name *" class="px-4 py-3 border w-full rounded-md outline-none" name="lname" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm md:text-base">
                    <select class="select w-full rounded-md outline-none" name="blood" required>
                        <option value="" disabled selected>Blood Group *</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>Ab-</option>
                    </select>
                    <select class="select w-full rounded-md outline-none" name="location" required>
                        <option value="" disabled selected>Location *</option>
                        <option>Dhaka</option>
                        <option>Faridpur</option>
                        <option>Gazipur</option>
                        <option>Gopalganj</option>
                        <option>Jamalpur</option>
                        <option>Kishoreganj</option>
                        <option>Madaripur</option>
                        <option>Manikganj</option>
                        <option>Munshiganj</option>
                        <option>Mymensingh</option>
                        <option>Narayanganj</option>
                        <option>Narsingdi</option>
                        <option>Netrokona</option>
                        <option>Rajbari</option>
                        <option>Shariatpur</option>
                        <option>Sherpur</option>
                        <option>Tangail</option>
                        <option>Bogra</option>
                        <option>Joypurhat</option>
                        <option>Naogaon</option>
                        <option>Natore</option>
                        <option>Nawabganj</option>
                        <option>Pabna</option>
                        <option>Rajshahi</option>
                        <option>Sirajgonj</option>
                        <option>Dinajpur</option>
                        <option>Gaibandha</option>
                        <option>Kurigram</option>
                        <option>Lalmonirhat</option>
                        <option>Nilphamari</option>
                        <option>Panchagarh</option>
                        <option>Rangpur</option>
                        <option>Thakurgaon</option>
                        <option>Barguna </option>
                        <option>Barisal</option>
                        <option>Bhola</option>
                        <option>Jhalokati</option>
                        <option>Patuakhali</option>
                        <option>Pirojpur</option>
                        <option>Bandarban</option>
                        <option>Brahmanbaria</option>
                        <option>Chandpur</option>
                        <option>Chattragram</option>
                        <option>Comilla</option>
                        <option>Cox's Bazar</option>
                        <option>Feni</option>
                        <option>Khagrachari</option>
                        <option>Lakshmipur</option>
                        <option>Noakhali</option>
                        <option>Rangamati</option>
                        <option>Habiganj</option>
                        <option>Maulvibazar</option>
                        <option>Sunamganj</option>
                        <option>Sylhet</option>
                        <option>Bagerhat</option>
                        <option>Chuadanga</option>
                        <option>Jessore</option>
                        <option>Jhenaidah</option>
                        <option>Khulna</option>
                        <option>Kushtia</option>
                        <option>Magura</option>
                        <option>Meherpur</option>
                        <option>Narail</option>
                        <option>Satkhira </option>
                    </select>
                </div>
                <div class="text-sm md:text-base">
                    <select class="select w-full rounded-md outline-none" name="gender" required>
                        <option value="" disabled selected>Gender *</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Not to prefer</option>
                    </select>
                </div>
                <div class="text-sm md:text-base">
                    <input type="tel" placeholder="Phone *" class="px-4 py-3 border w-full rounded-md outline-none" name="phone" required>
                </div>
                <div class="text-sm md:text-base">
                    <input type="email" placeholder="Email *" class="px-4 py-3 border w-full rounded-md outline-none" name="email" required>
                </div>
                <div class="text-sm md:text-base">
                    <input type="password" placeholder="Password *" class="px-4 py-3 border w-full rounded-md outline-none" name="pass" required>
                </div>
                <div>
                    <input type="file" class="file-input file-input-bordered w-full " name="photo" />
                </div>
                <div class="flex items-center justify-center md:justify-start gap-2 opacity-80 text-sm md:text-base">
                    <input type="checkbox" class="checkbox checkbox-success" required/>
                    <p>I accept the <span class="text-green-500">Terms of Use</span> & <span class="text-green-500">Privacy Policy</span> *</p>
                </div>
                <input type="hidden" name="status" value="pending">
                <input type="hidden" name="date" value="<?php

                date_default_timezone_set("Asia/Dhaka");
                echo date("j-M-Y g:i:s a", time());

                ?>">
                <div class="text-center">
                    <button type="submit"
                        class="bg-[#EB2C29] rounded-md py-2 font-medium text-white transition duration-500 ease-in-out hover:bg-black shadow-2xl w-full">Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>