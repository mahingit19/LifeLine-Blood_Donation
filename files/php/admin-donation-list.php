<!-- main section start -->
<main class="px-4 mt-6">
                        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl md:text-2xl font-bold mb-4">Total Donation List</h2>
                        <?php
                        if ($user_type == "donor"){
                            $current_date = date("j-M-Y");
                            echo <<<EOT
                            <form action="submit.php" method="post">
                            <input type="hidden" name="donor_id" value="$session_array[donor_id]">
                            <input type="hidden" name="donation_date" value="$current_date">
                            <button type="submit" name="donation" value="true" 
                            onclick="return confirm('Are you sure donated? Careful before submitting!');"
                                        class="bg-blue-500 text-white px-4 py-2 font-medium rounded-md transition duration-500 ease-in-out hover:bg-black shadow-2xl">(+) Add
                                        donation</button>
                            </form>
                            EOT;
                        }
                        ?>

                            
                        </div>
                            
                            <p>Total found <?php 
                            if ($user_type == "user"){
                                echo $donation_num_rows;
                            }
                            if ($user_type == "donor"){
                                echo $session_donation_num_rows;
                            }
                            
                            ?></p>
                            <div class="overflow-x-auto overflow-auto h-96">
                                <table class="min-w-full h-48 border-collapse">
                                    <thead class="bg-white bg-opacity-75 backdrop-blur-md px-4 py-2 border-b border-gray-200 text-left sticky top-0">
        <tr>
            <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Donation ID</th>
            <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Donation Date</th>
            <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Donor ID</th>
            <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Donor Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($user_type == "user"){
            if ($donation_num_rows > 0) {
                // output data of each row
                while($donation_array = mysqli_fetch_assoc($donation_query)) {
                    echo <<<EOT
                    <tr class="border-b">
                        <td class="p-3 text-sm md:text-base">$donation_array[donation_id]</td>
                        <td class="p-3 text-sm md:text-base">$donation_array[donation_date]</td>
                        <td class="p-3 text-sm md:text-base">$donation_array[donor_id]</td>
                        <td class="p-3 text-sm md:text-base">$donation_array[donor_name]</td>
                    </tr>
                    EOT;
                }
                }
        }
        if ($user_type == "donor"){
            if ($session_donation_num_rows > 0) {
                // output data of each row
                while($session_donation_array = mysqli_fetch_assoc($session_donation_query)) {
                    echo <<<EOT
                    <tr class="border-b">
                        <td class="p-3 text-sm md:text-base">$session_donation_array[donation_id]</td>
                        <td class="p-3 text-sm md:text-base">$session_donation_array[donation_date]</td>
                        <td class="p-3 text-sm md:text-base">$session_donation_array[donor_id]</td>
                        <td class="p-3 text-sm md:text-base">$session_donation_array[donor_name]</td>
                    </tr>
                    EOT;
                }
                }
        }
                    ?>
    </tbody>
</table>
</div>
</div>
</main>
<!-- main section end -->
</section>
</header>
</section>
</div>
<!-- header large device section end -->