<!-- search donation section -->
<section class="bg-[#FCE0DF]">
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-8 lg:py-16 mt-8 lg:mt-0">
            <form action="?page=search-donor" method="post">
                <div class="grid grid-cols-1 md:grid-cols-2
                    lg:grid-cols-3 xl:grid-cols-5 justify-between gap-6 items-center text-sm lg:text-base">
                    
                    <div>
                        <label class="font-medium">Blood Group</label><br>
                        <select class="select select-bordered w-full mt-1 font-semibold text-sm lg:text-base" name="blood">
                            <option disabled selected>Select</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>Ab-</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-medium">District</label><br>
                        <select class="select select-bordered w-full mt-1 font-semibold text-sm lg:text-base" name="location">
                            <option disabled selected>Select</option>
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
                        <label class="font-medium">Date of Blood Donation</label><br>
                        <input type="date" class="input input-bordered w-full mt-1 font-semibold text-sm lg:text-base" name="date">
                    </div>

                    <div>
                        <label class="font-medium">Donor Type</label><br>
                        <select class="select select-bordered w-full mt-1 font-semibold text-sm lg:text-base" name="type">
                            <option disabled selected>Select</option>
                            <option>All</option>
                            <option>Eligible</option>
                        </select>
                    </div>

                    <div class="text-center">
                        
                            <input type="submit"
                                class="bg-[#EB2C29] rounded-md py-3 font-semibold text-white transition duration-500 ease-in-out hover:bg-black shadow-2xl mt-7 w-full" name="submit" value="Search">
                            
                        
                    </div>
                    </form>
                </div>
            </div>
        </section>

<footer class="bg-[#B71C1C] border-dashed border-t-2 border-[#FCE0DF] mt-1">
        <section
            class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto md:flex justify-between py-16 space-y-6 md:space-y-0 gap-5">
            <div class="space-y-5 md:w-1/3">
                <h1 class="text-white text-xl md:text-2xl lg:text-3xl font-medium">LifeLine - Blood Donation</h1>

                <p class="text-white text-sm lg:text-base">LifeLine - Blood Donation is a web based blood service that
                    connects blood
                    searchers with voluntary blood donors in a moment through Gmail and website.</p>

                <div class="flex gap-5">
                    <a href="#"><i class="fa-brands fa-facebook "></i></a>
                    <a href="#"><i class="fa-brands fa-instagram "></i></a>
                    <a href="#"><i class="fa-brands fa-square-twitter "></i></a>
                </div>

                <p class="text-sm lg:text-base">Term & Conditions <span class="text-white">|</span> Privacy Policy</p>
            </div>

            <div class="text-white space-y-5 text-sm lg:text-base">
                <h1 class="text-xl md:text-2xl lg:text-3xl font-medium">Important Link</h1>

                <ul class="space-y-5">
                    <li><a href="?page=home" class="hover:underline">Home</a></li>
                    <li><a href="?page=search-donor" class="hover:underline">Blood Donors List in
                            Bangladesh</a></li>
                    <li><a href="?page=faqs" class="hover:underline">Frequently Asked Questions
                            (FAQs)</a></li>
                    <li><a href="?page=about" class="hover:underline">About Us</a></li>
                    <li><a href="?page=contact" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>


            <div class="text-white space-y-5 text-sm lg:text-base">
                <h1 class="text-xl md:text-2xl lg:text-3xl font-medium">About Blood</h1>

                <ul class="space-y-5">
                    <li><a href="?page=what-is-blood" class="hover:underline">What is blood?</a></li>
                    <li><a href="?page=what-is-blood-donation" class="hover:underline">What is blood
                            donation?</a></li>
                    <li><a href="?page=who-can-donate-blood" class="hover:underline">Who can donate
                            blood?</a></li>
                    <li><a href="?page=how-often-can-i-donate-blood" class="hover:underline">How often
                            can I donate
                            blood?</a></li>
                    <li><a href="?page=different-blood-term" class="hover:underline">Different Blood
                            Terms</a></li>
                    <li><a href="?page=different-blood-group" class="hover:underline">Different Blood
                            Groups</a></li>
                </ul>
            </div>
        </section>

        <!-- copyright section -->
        <section class="bg-[#333333]">
            <div class="w-10/12 mx-auto py-4">
                <div class="md:flex justify-between text-white text-xs space-y-2 md:space-y-0 text-center">
                    <p>Copyright © LLBD 2024 - Present | Made by LLBD team </p>
                    <p>Copyright Protected</p>
                </div>
            </div>
        </section>
    </footer>