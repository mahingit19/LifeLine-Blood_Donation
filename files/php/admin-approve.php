<!-- main section start -->
<main class="px-4 mt-6">
                        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md">
                            <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl md:text-2xl font-bold mb-4">Approvals needed</h2>
                            <form action="approval.php" method="post">
                            <input type="hidden" name="approve_all" value="approve">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 font-medium rounded-md transition duration-500 ease-in-out hover:bg-black shadow-2xl">Approve All</button>
                            </form>
                            </div>
                            <p>Total found <?php echo $approval_donor_num_rows;?></p>
                            <div class="overflow-x-auto overflow-auto h-96">
                                <table class="min-w-full h-48 border-collapse">
                                    <thead class="bg-white bg-opacity-75 backdrop-blur-md px-4 py-2 border-b border-gray-200 text-left sticky top-0">
                    <tr>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">ID</th>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Name</th>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Blood Group</th>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Location</th>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Gender</th>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Phone</th>
                        <th class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Join Date</th>
                        <th colspan='2' class="border-b-2 p-3 text-left text-sm md:text-base lg:text-lg">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($approval_donor_num_rows > 0) {
                            // output data of each row
                            while($approval_donor_array = mysqli_fetch_assoc($approval_donor_query)) {
                                echo <<<EOT
                                <tr class="border-b">
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_id]</td>
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_name]</td>
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_blood]</td>
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_location]</td>
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_gender]</td>
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_phone]</td>
                                    <td class="p-3 text-sm md:text-base">$approval_donor_array[donor_date]</td>
                                    <td class="p-3 text-sm md:text-base">
                                    <form action="approval.php" method="post">
                                    <input type="hidden" name="approval_id" value="$approval_donor_array[donor_id]">
                                    <button type="submit" class="text-green-600 hover:underline">
                                                    <i class="fa-solid fa-check text-2xl"></i>
                                                </button>
                                    </form>
                                    </td>
                                    <td class=" text-sm md:text-base">
                                    <form action="delete.php" method="post">
                                                <input type="hidden" name="delete_id" value="$approval_donor_array[donor_id]" >
                                                <input type="hidden" name="page_id" value="$page" >
                                                <button onclick="return confirm('Are you sure want to delete $approval_donor_array[donor_name]?')" class="text-red-600 hover:underline"><i class="fa-solid fa-xmark text-2xl"></i></button>
                                            </form>
                                    </td>
                                </tr>
                                EOT;
                            }
                            }
                    ?>
                </tbody>
                