<?php

session_start();
if (!isset($_SESSION["email"]) && !isset($_SESSION["pass"])){
    header("Location: ../../index.php?page=login-page&submit=must");
    exit;
}

include "admin-sql.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLBD Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="../image/logo.jpg">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

<?php

include "admin-UI.php";

$page = 'admin-dash';
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if (isset($page)){
        if ($page=='admin-dash'){
            include "admin-dash.php"; 
        }
        if ($page=='admin-profile'){
            include "admin-profile.php"; 
        }
        if ($page=='admin-donor-list' && $user_type=='user'){
            include "admin-donor-list.php"; 
        }
        if ($page=='admin-add-new-donor' && $user_type=='user'){
            include "admin-add-new-donor.php"; 
        }
        if ($page=='admin-approve' && $user_type=='user'){
            include "admin-approve.php"; 
        }
        if ($page=='admin-donation-list' && $user_type=='user'){
            include "admin-donation-list.php"; 
        }
        if ($page=='admin-user-list' && $user_type=='user'){
            include "admin-user-list.php"; 
        }
        if ($page=='admin-update-form'){
            include "admin-update-form.php"; 
        }
    }

?>

</body>

</html>
