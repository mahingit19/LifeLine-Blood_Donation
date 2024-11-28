<?php

$servername = "localhost";
$serveruser = "root";
$serverpass = "";
include "db_name.php";

$connect = mysqli_connect($servername, $serveruser, $serverpass);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// echo "Server Connected Successfully! <br>";

?>