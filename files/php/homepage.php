    <!-- main section start -->
    <main>
        <!-- banner section start -->
        <section class="banner shadow-lg shadow-gray-500/50 text-white">
            <div class="xl:w-10/12 mx-auto py-16 xl:py-32 px-5 md:px-10 lg:px-20 xl:px-0">
                <h1 class="myfont font-semibold text-[1.6rem] md:text-[2rem] lg:text-[3rem] leading-tight lg:w-2/3">
                    Web-based platform to connect
                    blood
                    searchers with donors
                </h1>
                <p class="lg:w-1/2 mt-2 font-semibold text-sm lg:text-base">LifeLine - Blood Donation is a real-time
                    free platform to help
                    blood searchers connect voluntary
                    blood donors around Bangladesh.</p>

                <div class="flex justify-center md:justify-start mt-8 lg:mt-16 gap-4">
                    <a href="?page=register">
                        <button
                            class="bg-[#EB2C29] text-sm md:text-base px-3 md:px-6 rounded-md py-3 font-semibold flex items-center space-x-1 shadow-xl hover:shadow-2xl focus:shadow-lg transition-shadow">Join
                            as a Donor
                        </button>
                    </a>
                    <a href="?page=search-donor">
                        <button
                            class="bg-white text-red-600 text-sm md:text-base  rounded-md py-3 font-semibold px-3 md:px-6 flex items-center space-x-1 shadow-xl hover:shadow-2xl focus:shadow-lg transition-shadow">Search
                            Donors
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <!-- banner section end -->
        <!-- learn more section -->
        <section class="bg-[#FAFAFA] py-10 lg:py-20 px-5 md:px-10 lg:px-20 xl:px-0">
            <div class="xl:w-10/12 mx-auto">
                <div class="md:flex gap-8">
                    <div class="md:w-1/2">
                        <h1 class="text-xl lg:text-2xl font-semibold">What is LifeLine - Blood Donation?</h1>

                        <p class="mt-4 text-sm lg:text-base">LifeLine - Blood Donation is a web based blood service that
                            connects blood
                            searchers
                            with
                            voluntary donors in a moment through Website. LifeLine - Blood Donation is always a
                            free
                            service for all.</p>
                    </div>

                    <div class="mt-6 md:mt-0 md:w-1/2">
                        <h1 class="text-xl lg:text-2xl font-semibold">Why is LifeLine - Blood Donation?</h1>

                        <div class="mt-4 text-sm lg:text-base">
                            <li>Web Based</li>
                            <li>Always Free</li>
                            <li>12x7 service</li>
                            <li>All Data is secured</li>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="?page=about">
                        <button
                            class="bg-[#EB2C29] px-7 rounded-md py-3 font-semibold text-white transition duration-500 ease-in-out hover:bg-black shadow-2xl mt-8 text-sm lg:text-base">Learn
                            More</button>
                    </a>
                </div>
            </div>
        </section>

        <!-- search donors -->
        <section class="bg-[#FAFAFA]">
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto lg:py-16 ">
                <h1 class="text-center font-semibold text-xl lg:text-2xl">Search Donors</h1>
                <form action="?page=search-donor" method="post">
                <div class="grid grid-cols-1 md:grid-cols-2
                    lg:grid-cols-3 xl:grid-cols-5 justify-between gap-6 items-center mt-6 text-sm lg:text-base">
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
                        <label>Date of Blood Donation</label><br>
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
            </div>
        </section>

        <!-- network area section -->
        <section>
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto text-center space-y-12 py-20">
                <h1 class="text-center font-semibold text-xl lg:text-2xl">We're a network of</h1>

                <div class="md:flex justify-around space-y-10 md:space-y-0">
                    <div>
                        <i class="fa-solid fa-users text-[#EB2C29] text-3xl lg:text-5xl"></i>
                        <h1 class="mt-6 text-xl lg:text-2xl font-medium">500+ Donors</h1>
                    </div>
                    <div>
                        <i class="fa-solid fa-location-dot text-[#EB2C29] text-3xl lg:text-5xl"></i>
                        <h1 class="mt-6 text-xl lg:text-2xl font-medium">64 Districts</h1>
                    </div>
                    <div>
                        <i class="fa-solid fa-droplet text-[#EB2C29] text-3xl lg:text-5xl"></i>
                        <h1 class="mt-6 text-xl lg:text-2xl font-medium">8 Blood Groups</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- about us section -->
        <section class="bg-[#FAFAFA]">
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto text-center py-10 lg:py-20 space-y-5">
                <h1 class="text-2xl lg:text-3xl font-medium">About Us</h1>
                <p class="lg:w-1/2 mx-auto text-justify text-sm lg:text-base">LifeLine - Blood Donation is a web based
                    blood service that
                    connects blood searchers with
                    voluntary blood donors in a moment through Website. LifeLine - Blood Donation is a not-for-profit
                    initiative to aware people of voluntary blood donation in Bangladesh</p>

                <div>
                    <a href="?page=about">
                        <button
                            class="bg-[#EB2C29] px-7 rounded-md py-3 text-white transition duration-500 ease-in-out hover:bg-black shadow-2xl mt-4 text-sm lg:text-base">Learn
                            More</button>
                    </a>
                </div>
            </div>
        </section>

        
    </main>
    <!-- main section end -->