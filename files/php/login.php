<?php

include "db_connect.php";
include "db_select.php";

$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

$user_sql = "SELECT user_email,user_pass FROM ".$dbname."_user_list 
        WHERE user_email='$email' AND user_pass='$pass';";
$donor_sql = "SELECT donor_email,donor_pass FROM ".$dbname."_donor_list 
        WHERE donor_email='$email' AND donor_pass='$pass'";

$user_query = mysqli_query($connect,$user_sql);
$donor_query = mysqli_query($connect,$donor_sql);

$user_num_rows = mysqli_num_rows($user_query);
$donor_num_rows = mysqli_num_rows($donor_query);

if ($user_num_rows == 1){
    session_start();

    $_SESSION["email"] = $email;
    $_SESSION["pass"] = $pass;
    $_SESSION["type"] = "user";

    header("Location: admin-panel.php");
}

else if ($donor_num_rows == 1){
    session_start();

    $_SESSION["email"] = $email;
    $_SESSION["pass"] = $pass;
    $_SESSION["type"] = "donor";

    header("Location: admin-panel.php");
}

else{
    header("Location: ../../index.php?page=login-page&submit=failed");
}

?>