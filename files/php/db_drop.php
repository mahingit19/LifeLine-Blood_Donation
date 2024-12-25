<?php

include "db_connect.php";
include "db_name.php";

$sql = "DROP DATABASE $dbname";
$query = mysqli_query($connect, $sql);

echo "<span style='display: block; padding: 10px; font-size: 24px; background-color: #FF474C; color: black;'><b>$dbname</b> deleted successfully!</span>";

echo "<span style='display: block; padding: 10px; font-size: 24px; background-color: #FF474C; color: black;'><button style='padding: 10px; width: 20%; cursor: pointer;' onclick='history.back()'>Go Back!</button></span>";

?>