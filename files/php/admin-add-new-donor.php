<!-- main section start -->
<main>
<!-- register section end -->

<!-- register form -->
<section class="lg:px-10 my-6">
                        <div class="xl:w-11/12 mx-auto lg:flex items-center ">
                            <div class="lg:w-6/12 py-4 mx-auto border bg-gray-200 px-4">
            <?php 
                if (isset($_GET['submit'])){
                    $submit = $_GET['submit'];
                    if ($submit=='success'){
                        echo <<<EOT
                            <p class="text-green-600 font-semibold text-xl" style="background-color: rgb(226, 252, 222,0.3);border: 1px solid lightgreen; padding: 5px;">Data added successfully</p>
                        EOT;
                    }
                }
            ?>
            <div class="divider divider-primary">Add New Donor</div>

            <form class="text-black space-y-4" action="submit.php" method="post" enctype="multipart/form-data">
                <div class="md:flex justify-between gap-6 space-y-4 md:space-y-0">
                    <input type="text" placeholder="First Name" class="w-full py-2 px-2 rounded-md outline-none" name="fname">
                    <input type="text" placeholder="Last Name" class="w-full py-2 px-2 rounded-md outline-none" name="lname">
                </div>
                <div class="md:flex justify-between gap-6 space-y-4 md:space-y-0">
                    <select class="w-full py-2 px-2 rounded-md outline-none" name="blood">
                        <option disabled selected>Blood Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>Ab-</option>
                    </select>
                    <select class="w-full py-2 px-2 rounded-md outline-none" name="location">
                        <option disabled selected>Location</option>
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
                <div>
                    <select class="w-full py-2 px-2 rounded-md outline-none" name="gender">
                        <option disabled selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Transgender</option>
                        <option>Not to prefer</option>
                    </select>
                </div>
                <div>
                    <input type="email" placeholder="Email" class="w-full py-2 px-2 rounded-md outline-none" name="email">
                </div>
                <div>
                    <input type="tel" placeholder="Phone" class="w-full py-2 px-2 rounded-md outline-none" name="phone">
                </div>
                <div>
                    <input type="password" placeholder="Password" class="w-full py-2 px-2 rounded-md outline-none" name="pass">
                </div>
                <div>
                    <input type="file" class="file-input file-input-bordered w-full " name="photo" />
                </div>
                <input type="hidden" name="status" value="allowed">
                <input type="hidden" name="date" value="<?php

                date_default_timezone_set("Asia/Dhaka");
                echo date("j-M-Y g:i:s a", time());

                ?>">
                <input type="hidden" name="admin-donor-entry" value="admin">
                <div class="text-center">
                    <button type="submit"
                        class="bg-[#EB2C29] rounded-md py-2 font-medium text-white transition duration-500 ease-in-out hover:bg-black shadow-2xl w-full">Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>