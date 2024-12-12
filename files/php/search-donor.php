<?php

include "db_connect.php";
include "db_select.php";

$self = $_SERVER['PHP_SELF'];

$blood = "";
$location = "";
$date = "";
$type = "";

if(isset($_POST["submit"])){
    if (isset($_POST["blood"])){
        $blood = $_POST["blood"];
    }
    if (isset($_POST["location"])){
        $location = $_POST["location"];
    }
    if (isset($_POST["date"])){
        $date = $_POST["date"];
    }
    if (isset($_POST["type"])){
        $type = $_POST["type"];
    }

    if ($blood != '' && $location != ''){
        $sql = "SELECT donor_name,donor_blood,donor_location,donor_phone,donor_photo FROM $dbname"."_donor_list WHERE donor_status='allowed' AND donor_blood='$blood' AND donor_location='$location' ORDER BY donor_name ASC";
    }
    else{
        $sql = "SELECT donor_name,donor_blood,donor_location,donor_phone,donor_photo FROM $dbname"."_donor_list WHERE donor_status='allowed' AND (donor_blood='$blood' OR donor_location='$location') ORDER BY donor_name ASC";
    }
    
    $query = mysqli_query($connect,$sql);

    $num_rows = mysqli_num_rows($query);


}
else{
    $sql = "SELECT donor_name,donor_blood,donor_location,donor_phone,donor_photo FROM $dbname"."_donor_list WHERE donor_status='allowed' ORDER BY donor_name ASC";
    $query = mysqli_query($connect,$sql);
    
    $num_rows = mysqli_num_rows($query);
}




?>

<?php include "top-search.php"; ?>

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
                
                if ($num_rows > 0) {
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
                  } else {
                    echo "0 results";
                  }

                ?>
            
            </div>
        </section>