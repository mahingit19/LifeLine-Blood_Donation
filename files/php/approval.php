<?php

include "db_connect.php";
include "db_select.php";


if(isset($_POST["approval_id"])){
    $approval_id = $_POST["approval_id"];

    $approval_sql = "UPDATE $dbname"."_donor_list
                        SET donor_status = 'allowed'
                        WHERE donor_id = '$approval_id'
                        ";
}
if(isset($_POST["approve_all"])){
    $approval_sql = "UPDATE $dbname"."_donor_list
                        SET donor_status = 'allowed'
                        ";
}

mysqli_query($connect,$approval_sql);

header("Location:admin-panel.php?page=admin-approve");
?>