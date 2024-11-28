<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["pass"]);
session_destroy();
header("Location:../../index.php?page=login-page");
?>