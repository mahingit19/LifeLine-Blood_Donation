<?php

include "db_connect.php";
include "db_select.php";

include "search-donor_sql.php";

?>

<?php include "top-search.php"; ?>

<?php
                
                if ($num_rows > 0 && $date == '') {

?>

        <!-- donor card section -->
        <section class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-8 lg:py-16">
            <div class="text-white border bg-[#EB2C29] w-full py-3 px-4 text-sm lg:text-base">
                <p>Total Donors Found <b><?php echo $num_rows; 
                if (isset($_POST["submit"])){
                    echo " Search results for \"$blood $location\"";
                }
                ?></b></p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4 gap-5 text-sm lg:text-base">
                <?php
                
                    // output data of each row
                    while($array = mysqli_fetch_assoc($query)) {
                    echo <<<EOT

                            <div class="border shadow-xl flex items-center gap-4 p-2 h-auto w-auto rounded-md">
                                <div>
                    EOT;
                    if ($array['donor_photo'] == "" || $array['donor_photo'] == "uploads/"){
                        echo <<<EOT
                        <img src="files/image/blood-donation.png" alt="user_profile" class="h-28 w-28 rounded-md">
                        EOT;
                    }
                    else {
                        echo <<<EOT
                        <img src="files/php/$array[donor_photo]" alt="user_profile" class="h-28 w-28 rounded-md">
                        EOT;
                    }
                                    

                    echo <<<EOT
                                </div>
                                <table>
                                    <tr class="flex gap-6">
                                        <th>Name</th>
                                        <td>$array[donor_name]</td>
                                    </tr>
                                    <tr class="flex gap-6">
                                        <th>Group</th>
                                        <td>$array[donor_blood]</td>
                                    </tr>
                                    <tr class="flex gap-4">
                                        <th>District</th>
                                        <td>$array[donor_location]</td>
                                    </tr>
                                    <tr class="flex gap-6">
                                        <th>Phone</th>
                                        <td>$array[donor_phone]</td>
                                    </tr>
                                </table>
                            </div>


                      EOT;
                    }
                  } 
                  else if ($date != '') {
                        include "date_sql.php";
                    }
                  else {
                    ?>
                    <!-- donor card section -->
        <section class="xl:w-10/12 px-5 md:px-10 lg:px-20 xl:px-0 mx-auto py-8 lg:py-16">
            <div class="text-white border bg-[#EB2C29] w-full py-3 px-4 text-sm lg:text-base">
                <p>Total Donors Found <b><?php echo $num_rows; 
                if (isset($_POST["submit"])){
                    echo " Search results for \"$blood $location\"";
                }
                ?></b></p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4 gap-5 text-sm lg:text-base">
                    <?php
                    echo "0 results";
                  }

                ?>
            
            </div>
        </section>