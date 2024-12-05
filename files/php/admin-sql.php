<?php

$user_type = $_SESSION["type"];

include "db_connect.php";
include "db_select.php";

$session_sql = "SELECT * FROM $dbname"."_".$user_type."_list WHERE ".$user_type."_email='$_SESSION[email]' AND ".$user_type."_pass='$_SESSION[pass]';";
$session_query = mysqli_query($connect,$session_sql);
$session_array = mysqli_fetch_array($session_query,MYSQLI_BOTH);

$donor_sql = "SELECT * FROM $dbname"."_donor_list WHERE donor_status='allowed'";
$donor_query = mysqli_query($connect,$donor_sql);
$donor_num_rows = mysqli_num_rows($donor_query);

$approval_donor_sql = "SELECT * FROM $dbname"."_donor_list WHERE donor_status='pending'";
$approval_donor_query = mysqli_query($connect,$approval_donor_sql);
$approval_donor_num_rows = mysqli_num_rows($approval_donor_query);

if (isset($_GET['id'])){
    $donor_get_id = $_GET['id'];

    $donor_get_sql = "SELECT * FROM $dbname"."_donor_list WHERE donor_id='$donor_get_id'";
    $donor_get_query = mysqli_query($connect,$donor_get_sql);
    $donor_get_array = mysqli_fetch_array($donor_get_query,MYSQLI_ASSOC);
}

$donor_table = $dbname."_donor_list";
$donation_table = $dbname."_donation_list";

if ($user_type == "user"){
    $donation_sql = "SELECT $donation_table.donation_id, $donation_table.donation_date, $donor_table.donor_id,  $donor_table.donor_name
                FROM $donation_table
                INNER JOIN $donor_table ON $donation_table.donor_id=$donor_table.donor_id;";
    $donation_query = mysqli_query($connect,$donation_sql);
    $donation_num_rows = mysqli_num_rows($donation_query);
}

if ($user_type == "donor"){
    $session_donation_sql = "SELECT $donation_table.donation_id, $donation_table.donation_date, $donor_table.donor_id,  $donor_table.donor_name
                FROM $donation_table
                INNER JOIN $donor_table ON $donation_table.donor_id=$donor_table.donor_id  WHERE $donation_table.donor_id='$session_array[donor_id]' ORDER BY $donation_table.donation_id DESC;";
    $session_donation_query = mysqli_query($connect,$session_donation_sql);
    $session_donation_num_rows = mysqli_num_rows($session_donation_query);
}

$user_sql = "SELECT * FROM $dbname"."_user_list";
$user_query = mysqli_query($connect,$user_sql);
$user_num_rows = mysqli_num_rows($user_query);

?>