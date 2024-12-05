<?php

include "db_connect.php";
include "db_select.php";

if(isset($_POST["page_id"])){
    $page = $_POST["page_id"];
}

if(isset($_POST["delete_id"])){
    $delete_id = $_POST["delete_id"];

    $delete_sql = "DELETE FROM $dbname"."_donor_list
                        WHERE donor_id = '$delete_id'
                        ";
}

mysqli_query($connect,$delete_sql);

header("Location:admin-panel.php?page=$page");
?>