<!-- main section start -->
<main class="px-4 mt-6">
                        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                            <h2 class="text-xl md:text-2xl font-bold mb-4">Total Donors List</h2>
                            <p>Total found <?php echo $donation_num_rows;?></p>
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
                            } else {
                            echo "0 results";
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