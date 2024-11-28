<?php

include "db_connect.php";
include "db_name.php";

$sql = "DROP DATABASE $dbname";
$query = mysqli_query($connect, $sql);

echo "'$dbname' database dropped";

?>