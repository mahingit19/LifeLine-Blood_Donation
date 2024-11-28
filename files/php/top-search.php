<main>
        <!-- top search -->
        <section class="bg-[#FCE0DF]">
            <div class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-8 lg:py-16 mt-8 lg:mt-0">
            <form action="?page=search-donor" method="post">
                <div class="grid grid-cols-1 md:grid-cols-2
                    lg:grid-cols-3 xl:grid-cols-6 justify-between gap-6 items-center text-sm lg:text-base">
                    
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
                        <label class="font-medium" style="font-size:small">Date of Blood Donation</label><br>
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
                    <div class="text-center">
                        <a href="?page=search-donor">
                            <button class="bg-[blue] rounded-md py-3 font-semibold text-white transition duration-500 ease-in-out hover:bg-black shadow-2xl mt-7 w-full">Clear</button>
                        </a>
                    </div>
                    </form>
                </div>
            </div>
        </section>