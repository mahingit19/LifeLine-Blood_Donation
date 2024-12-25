


<!-- donor card section -->
<section class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-8 lg:py-16">
            <div class="text-white border bg-[#EB2C29] w-full py-3 px-4 text-sm lg:text-base">
                <p>Search based on date "<?php echo date_format($date,"j-M-Y"); ?>"</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4 gap-5 text-sm lg:text-base">

<?php

$donor_sql = "SELECT donor_id FROM $dbname"."_donor_list WHERE donor_status='allowed' ORDER BY donor_id ASC";
                        $donor_sql_query = mysqli_query($connect,$donor_sql);
                
                        while ($donor_sql_fetch = mysqli_fetch_assoc($donor_sql_query)) {
                            $donor_id = $donor_sql_fetch["donor_id"];
                            
                            if ($date !='' && $blood == '' && $location == ''){
                                $join_sql = "SELECT ".$dbname."_donor_list.donor_name,".$dbname."_donor_list.donor_blood,".$dbname."_donor_list.donor_location,".$dbname."_donor_list.donor_phone,".$dbname."_donor_list.donor_photo, ".$dbname."_donation_list.donation_date
                                FROM ".$dbname."_donor_list
                                CROSS JOIN ".$dbname."_donation_list
                                ON ".$dbname."_donor_list.donor_id = ".$dbname."_donation_list.donor_id WHERE ".$dbname."_donor_list.donor_id=$donor_id ORDER BY ".$dbname."_donation_list.donation_id DESC LIMIT 1";
                            }
                            else if($date != '' && $blood != '' && $location != ''){
                                $join_sql = "SELECT ".$dbname."_donor_list.donor_name,".$dbname."_donor_list.donor_blood,".$dbname."_donor_list.donor_location,".$dbname."_donor_list.donor_phone,".$dbname."_donor_list.donor_photo, ".$dbname."_donation_list.donation_date
                                FROM ".$dbname."_donor_list
                                CROSS JOIN ".$dbname."_donation_list
                                ON ".$dbname."_donor_list.donor_id = ".$dbname."_donation_list.donor_id WHERE ".$dbname."_donor_list.donor_id=$donor_id AND ".$dbname."_donor_list.donor_blood='$blood' AND ".$dbname."_donor_list.donor_location='$location' ORDER BY ".$dbname."_donation_list.donation_id DESC LIMIT 1";
                            }
                            else{
                                $join_sql = "SELECT ".$dbname."_donor_list.donor_name,".$dbname."_donor_list.donor_blood,".$dbname."_donor_list.donor_location,".$dbname."_donor_list.donor_phone,".$dbname."_donor_list.donor_photo, ".$dbname."_donation_list.donation_date
                                FROM ".$dbname."_donor_list
                                CROSS JOIN ".$dbname."_donation_list
                                ON ".$dbname."_donor_list.donor_id = ".$dbname."_donation_list.donor_id WHERE ".$dbname."_donor_list.donor_id=$donor_id AND (".$dbname."_donor_list.donor_blood='$blood' OR ".$dbname."_donor_list.donor_location='$location') ORDER BY ".$dbname."_donation_list.donation_id DESC LIMIT 1";
                            }
           
                            $join_sql_query = mysqli_query($connect,$join_sql);
                            $join_num_rows = mysqli_num_rows($join_sql_query);
                
                            while ($join_sql_fetch = mysqli_fetch_assoc($join_sql_query)) {
                
                                $today = date("j-M-Y");
                                $current_date = $date;
                                $last_donation_date = date_create("$join_sql_fetch[donation_date]");
                                $next_donation_date = date_add($last_donation_date,date_interval_create_from_date_string("90 days"));
                                $date_diff = date_diff($next_donation_date,$current_date);
                                $remain_days = $date_diff->format("%R%a");
                
                                if ($remain_days < 0){
                                    echo "";
                                }
                                else if ($remain_days == 0 || $remain_days > 0){
                                    echo <<<EOT
                                    <div class="border shadow-xl flex items-center gap-4 p-2 h-auto w-auto rounded-md">
                                        <div>
                                    EOT;
                                    if ($join_sql_fetch['donor_photo'] == "" || $join_sql_fetch['donor_photo'] == "uploads/"){
                                        echo <<<EOT
                                        <img src="files/image/blood-donation.png" alt="user_profile" class="h-28 w-28 rounded-md">
                                        EOT;
                                    }
                                    else {
                                        echo <<<EOT
                                        <img src="files/php/$join_sql_fetch[donor_photo]" alt="user_profile" class="h-28 w-28 rounded-md">
                                        EOT;
                                    }
                                                    

                                    echo <<<EOT
                                                </div>
                                                <table>
                                                    <tr class="flex gap-6">
                                                        <th>Name</th>
                                                        <td>$join_sql_fetch[donor_name]</td>
                                                    </tr>
                                                    <tr class="flex gap-6">
                                                        <th>Group</th>
                                                        <td>$join_sql_fetch[donor_blood]</td>
                                                    </tr>
                                                    <tr class="flex gap-4">
                                                        <th>District</th>
                                                        <td>$join_sql_fetch[donor_location]</td>
                                                    </tr>
                                                    <tr class="flex gap-6">
                                                        <th>Phone</th>
                                                        <td>$join_sql_fetch[donor_phone]</td>
                                                    </tr>
                                                </table>
                                            </div>


                                    EOT;
                                }
                                else{
                                    echo "Something went wrong!";
                                }
                
                            }
                        }
                        if($join_num_rows == 0){
                            echo "0 results";
                        }

?>