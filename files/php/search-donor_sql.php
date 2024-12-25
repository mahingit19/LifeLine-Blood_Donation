<?php

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
        if ($date != ''){
            $date = date_create($date);
        }
    }

    if ($blood != '' && $location != '' && $date == ''){
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