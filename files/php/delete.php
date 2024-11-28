<?php

include "db_connect.php";
include "db_select.php";


if(isset($_POST["delete_id"])){
    $delete_id = $_POST["delete_id"];

    $delete_sql = "DELETE FROM $dbname"."_donor_list
                        WHERE donor_id = '$delete_id'
                        ";
}
// if(isset($_POST["approve_all"])){
//     $delete_sql = "UPDATE $dbname"."_donor_list
//                         SET donor_status = 'allowed'
//                         ";
// }

mysqli_query($connect,$delete_sql);

header("Location:admin-panel.php?page=admin-donor-list");
?>