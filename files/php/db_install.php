<?php

include "db_connect.php";

$create_db = "CREATE DATABASE $dbname";
mysqli_query($connect, $create_db);

echo "<span style='display: block; padding: 10px; font-size: 24px; background-color: lightgreen; color: black;'><b>$dbname</b> created successfully!</span>";

include "db_select.php";

$create_tb = "CREATE TABLE ".$dbname."_donor_list(
                donor_id INT NOT NULL AUTO_INCREMENT,
                donor_name VARCHAR(100),
                donor_blood VARCHAR(100),
                donor_location VARCHAR(100),
                donor_gender VARCHAR(100),
                donor_email VARCHAR(100),
                donor_phone VARCHAR(100),
                donor_pass VARCHAR(100),
                donor_date VARCHAR(100),
                donor_status VARCHAR(100),
                donor_photo VARCHAR(300),
                PRIMARY KEY(donor_id)
                );";

$create_tb .= "CREATE TABLE ".$dbname."_donation_list(
                donation_id INT NOT NULL AUTO_INCREMENT,
                donation_date VARCHAR(100),
                donor_id INT,
                PRIMARY KEY(donation_id),
                FOREIGN KEY(donor_id) REFERENCES ".$dbname."_donor_list(donor_id)
                );"; 

$create_tb .= "CREATE TABLE ".$dbname."_user_list(
                user_id INT NOT NULL AUTO_INCREMENT,
                user_name VARCHAR(100),
                user_blood VARCHAR(100),
                user_email VARCHAR(100),
                user_phone VARCHAR(100),
                user_pass VARCHAR(100),
                user_type VARCHAR(100),
                user_location VARCHAR(100),
                user_gender VARCHAR(100),
                user_date VARCHAR(100),
                user_status VARCHAR(100),
                user_photo VARCHAR(100),
                PRIMARY KEY(user_id)
                );";                

mysqli_multi_query($connect, $create_tb);

echo "<span style='display: block; padding: 10px; font-size: 24px; background-color: lightgreen; color: black;'><b>Tables</b> created successfully!</span>";

echo "<span style='display: block; padding: 10px; font-size: 24px; background-color: lightgreen; color: black;'><button style='padding: 10px; width: 20%; cursor: pointer;' onclick='history.back()'>Go Back!</button></span>";

?>
